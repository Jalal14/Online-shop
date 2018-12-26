<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cart;
use App\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $cartList = DB::table('view_cart')
            ->where('customer', $request->session()->get('loggedUser'))->get();
        $grand_total = 0;
        if(count($cartList) > 0){
            foreach ($cartList as $cart){
                if($cart->discount > 0){
                    $cart->sell_price -= ($cart->sell_price*$cart->discount/100);
                }
                $cart->sub_total = $cart->quantity*$cart->sell_price;
                $grand_total += $cart->sub_total;
            }
        }
        return view('users.cart-list')
            ->with('cartList', $cartList)
            ->with('grand_total', $grand_total);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $product = Product::find($request->id);
        $user = $request->session()->get('loggedUser');
        $cart = Cart::where('customer', $user)
            ->where('product', $product->id)
            ->first();
        if ($cart){
            $cart->quantity += $request->quantity;
        }else{
            $cart = new Cart();
            $cart->customer = $user;
            $cart->product = $product->id;
            $cart->quantity = $request->quantity;
            $cart->add_date = date('Y-m-d H:i:s');
        }
        if ($product->available < $cart->quantity){
            $request->session()->flash('msg', 'Product quantity is not available');
            return redirect()->back();
        }
        $cart->save();
        return redirect()->back();
    }
    public function show(Cart $cart)
    {
        //
    }
    public function edit(Cart $cart)
    {
        //
    }
    public function update(Request $request)
    {
        $product = Product::find($request->id);
        if ($product->quantity < $request->quantity){
            $request->session()->flash('msg', 'Product quantity is not available');
            return redirect()->back();
        }
        $cart = Cart::where('customer', $request->session()->get('loggedUser'))
            ->where('product', $request->id)
            ->first();
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect()->back();
    }
    public function destroy($product, Request $request)
    {
        Cart::where('customer', $request->session()->get('loggedUser'))
            ->where('product', $product)
            ->delete();
        return redirect()->back();
    }
    public function clear(Request $request)
    {
        Cart::where('customer', $request->session()->get('loggedUser'))->delete();
        return redirect()->back();
    }
}
