<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use App\BuyHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function orders(Request $request)
    {
        return view('information.orders');
    }
    public function process(Request $request)
    {
        return view('information.process');
    }
    public function delivered(Request $request)
    {
        return view('information.delivered');
    }
    public function returns(Request $request)
    {
        return view('information.returns');
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
    public function editBuyHistory($id, Request $request)
    {
        $history = DB::table('view_buy_history')
                    ->where('id', $id)
                    ->first();
        return view('admin.update-buy-history')
                ->with('history', $history);
    }
    public function updateBuyHistory(Request $request)
    {
        $this->validate($request, [
            'total' => 'bail | required | numeric | min:0',
            'price' => 'bail | required | numeric | min:0',
        ]);
        $history = BuyHistory::find($request->id);
        $history->total_price = $request->total;
        $history->sell_price = $request->price;
        $history->updated = date('Y-m-d');
        $history->update_emp = $request->session()->get('loggedAdmin');
        $history->save();
        return redirect()->route('information.buyHistory');
    }
}
