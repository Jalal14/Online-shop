<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use App\Product;
use App\Invoice;
use App\Category;
use App\Company;
use App\BuyHistory;
use App\Transaction;
use App\Returns;
use App\Order;

class InformationController extends Controller
{
    public function index(Request $request)
    {
        $invoiceList = DB::table('view_invoice')->get();
        return view('information.orders')
            ->with('invoiceList', $invoiceList);
    }
    public function orders(Request $request)
    {
        $invoiceList = DB::table('view_invoice')
            ->where('status', 6)
            ->get();
        return view('information.orders')
            ->with('invoiceList', $invoiceList);
    }
    public function processing(Request $request)
    {
        $invoiceList = DB::table('view_invoice')
            ->where('status', 7)
            ->get();
        return view('information.orders')
            ->with('invoiceList', $invoiceList);
    }
    public function delivered(Request $request)
    {
        $invoiceList = DB::table('view_invoice')
            ->where('status', 8)
            ->get();
        return view('information.orders')
            ->with('invoiceList', $invoiceList);
    }
    public function returns(Request $request)
    {
        $invoiceList = DB::table('view_invoice')
            ->where('status', 9)
            ->get();
        return view('information.orders')
            ->with('invoiceList', $invoiceList);
    }
    public function cancelled(Request $request)
    {
        $invoiceList = DB::table('view_invoice')
            ->where('status', 10)
            ->get();
        return view('information.orders')
            ->with('invoiceList', $invoiceList);
    }
    public function process($order, Request $request)
    {
        $orderList = DB::table('view_order')
            ->where('invoice_id', $order)
            ->get();
        $grandTotal = $orderList->sum('total');
        $invoice = DB::table('view_invoice')
            ->where('id', $order)
            ->first();
        if ($invoice->status == 9){
            $invoice->return_note = Returns::where('invoice_id',$invoice->id)
                ->orderBy('id', 'desc')
                ->pluck('note')
                ->first();
            $invoice->return_note = json_decode($invoice->return_note);
        }
        $sold_by = Admin::find($invoice->sell_by);
        return view('information.order-details')
            ->with('orderList', $orderList)
            ->with('invoice', $invoice)
            ->with('grandTotal', $grandTotal)
            ->with('sold_by', $sold_by);
    }
    public function action(Request $request)
    {
        $invoice = Invoice::find($request->order);
        if ($request->action == 'Delivered'){
            $request->session()->flash('msg', 'Order delivered');
            $invoice->status = 8;
        }elseif ($request->action == 'Process'){
            $request->session()->flash('msg', 'Order processing');
            $invoice->status = 7;
        }elseif ($request->action == 'Cancel'){
            $request->session()->flash('msg', 'Order canceled');
            $invoice->status = 10;
            $orderList = Order::where('invoice', $invoice->id)
                ->get();
            foreach ($orderList as $order){
                echo $order->quantity;
                $product = Product::find($order->product);
                $product->sold -= $order->quantity;
                $product->available += $order->quantity;
                $product->save();
            }
        }
        $invoice->acc_date = date('Y-m-d');
        $invoice->sell_by = $request->session()->get('loggedMod');
        if ($invoice->save() > 0 && $request->action == 'Delivered'){
            $transaction = new Transaction();
            $transaction->amount = $invoice->price;
            $transaction->tr_date = $invoice->acc_date;
            $transaction->type = 1;
            $transaction->acc_by = $invoice->sell_by;
            $transaction->invoice = $invoice->id;
            $transaction->save();
        }
        return redirect()->back();

    }
    public function returnCreate($order, Request $request)
    {
        $orderList = DB::table('view_order')
            ->where('invoice_id', $order)
            ->get();
        $grandTotal = $orderList->sum('total');
        $invoice = DB::table('view_invoice')
            ->where('id', $order)
            ->first();
        $sold_by = Admin::find($invoice->sell_by);
        return view('information.return-order')
            ->with('orderList', $orderList)
            ->with('invoice', $invoice)
            ->with('grandTotal', $grandTotal)
            ->with('sold_by', $sold_by);
    }
    public function returnStore(Request $request)
    {
        $return = new Returns();
        $return->invoice_id = $request->invoice;
        $return->ret_date = date("Y-m-d");
        $return->rec_by = $request->session()->get('loggedMod');
        $return->note = json_encode($request->return_note);
        $return->save();
        $invoice = Invoice::find($return->invoice_id);
        $invoice->status = 9;
        $invoice->save();
        $orderList = Order::where('invoice', $invoice->id)
            ->get();
        foreach ($orderList as $order){
            $product = Product::find($order->product);
            $product->available += $order->quantity;
            $product->sold -= $order->quantity;
            $product->save();
        }
        if ($invoice->status == 8){
            $transaction = new Transaction();
            $transaction->amount = -$invoice->price;
            $transaction->tr_date = $return->ret_date;
            $transaction->type = 1;
            $transaction->acc_by = $return->rec_by;
            $transaction->invoice = $return->invoice_id;
            $transaction->save();
        }
        return redirect()->route('information.action', [$return->invoice_id]);
    }
    public function buyHistory(Request $request)
    {
        $categoryList = Category::all();
        $companyList = Company::all();
        $historyList = DB::table('view_buy_history')->get();
        return view('admin.buy-history')
                ->with('categoryList', $categoryList)
                ->with('companyList', $companyList)
                ->with('historyList', $historyList);
    }
    public function editBuyHistory($buy, Request $request)
    {
        $history = DB::table('view_buy_history')
                    ->where('id', $buy)
                    ->first();
        if ($history->updated != null){
            $update_emp = Admin::find($history->update_emp);
            $history->update_uname = $update_emp->uname;
            $history->update_email = $update_emp->email;
        }
        return view('admin.update-buy-history')
                ->with('history', $history);
    }
    public function updateBuyHistory(Request $request)
    {
        $this->validate($request, [
            'total' => 'bail | required | numeric | min:0',
//            'price' => 'bail | required | numeric | min:0',
        ]);
        $transaction = Transaction::where('buy_id', $request->id)
            ->first();
        $transaction->amount = $request->total;
        $transaction->tr_date = date('Y-m-d');
        $transaction->type = 2;
        $transaction->acc_by = $request->session()->get('loggedMod');
        $transaction->save();
        $history = BuyHistory::find($request->id);
        $history->total_price = $request->total;
//        $history->sell_price = $request->price;
        $history->updated = date('Y-m-d');
        $history->update_emp = $request->session()->get('loggedAdmin');
        $history->save();
        return redirect()->route('information.transaction');
    }
    public function transactions(Request $request)
    {
        $transactionList = DB::table('view_transaction')->get();
//        dd($transactionList);
        return view('information.transaction-list')
            ->with('transactionList', $transactionList);
    }
}
