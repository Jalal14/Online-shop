<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Invoice;
use App\Product;
use App\Order;
use App\Cart;

class OrderController extends Controller
{
    public function checkout(Request $request)
    {
//        $genderList = Gender::all();
//        $companyList = Company::all();
//        $categoryList = Category::all();
        return view('users.checkout');
//            ->with('genderList', $genderList)
//            ->with('companyList', $companyList)
//            ->with('categoryList', $categoryList);
    }
    public function order(Request $request)
    {
        $user = User::find($request->session()->get('loggedUser'));
        $cartList = DB::table('view_cart')
            ->where('customer', $user->id)
            ->get();
        $cartQnt = $cartList->sum('quantity');
        $totalPrice = 0;
        $cartCount = count($cartList);
        if ($cartCount <= 0){
            $request->session()->flash('msg', "Your cart is empty");
            return redirect()->route('cart.index');
        }
        foreach ($cartList as $cart){
            $totalPrice += ($cart->sell_price - ($cart->sell_price * $cart->discount / 100)) * $cart->quantity;
        }
        $invoice = new Invoice();
        $invoice->customer = $user->id;
        if ($request->existing_address == 1){
            $invoice->phone1 = $user->phone;
            $invoice->phone2 = $user->phone2;
            $invoice->address = $user->address;
        }else{
            $invoice->phone1 = $request->mobile;
            $invoice->phone2 = $request->mobile2;
            $invoice->address = $request->address;
        }
        $invoice->price = $totalPrice;
        $invoice->quantity = $cartQnt;
        $invoice->status = 6;
        $invoice->order_date = date('y-m-d h:i:s');
        if ($invoice->save() > 0 && $cartCount > 0){
            foreach ($cartList as $cart){
                $order = new Order();
                $order->product = $cart->id;
                $order->quantity = $cart->quantity;
                $order->unit_price = $cart->sell_price;
                $order->sold_discount = $cart->discount;
                $order->total = ($cart->sell_price - ($cart->sell_price * $cart->discount / 100)) * $cart->quantity;
                $order->invoice = $invoice->id;
                $order->save();
            }
        }
        foreach ($cartList as $cart){
            $product = Product::find($cart->id);
            $product->available -= $cart->quantity;
            $product->sold += $cart->quantity;
            $product->save();
        }
        Cart::where('customer', $request->session()->get('loggedUser'))->delete();
        $request->session()->flash('msg', 'Thank you for your order');
        return redirect()->route('cart.index');
    }
    public function userOrders($order, Request $request)
    {
        $orderList = DB::table('view_order')
            ->where('customer', $request->session()->get('loggedUser'))
            ->where('invoice_id', $order)
            ->get();
        $invoice = Invoice::find($order);
        return view('users.order-list')
            ->with('orderList', $orderList)
            ->with('grandTotal', $invoice->price);
    }
}
