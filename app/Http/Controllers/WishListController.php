<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\WishList;
use App\Gender;
use App\Category;
use App\Company;

class WishListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $wishList = DB::table('view_wishlist')
                        ->where('customer', $request->session()->get('loggedUser'))
                        ->get();
        // $wishList = WishList::where('customer', $request->session()->get('loggedUser'))
        //                     ->get();
        return view('users.wish-list')
                ->with('wishList', $wishList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
        $wish = new WishList();
        $wish->customer = $request->session()->get('loggedUser');
        $wish->product = $id;
        $wish->add_date = date('Y-m-d');
        $wish->save();
        // return redirect()->route('wish.index');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function show(WishList $wishList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function edit(WishList $wishList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WishList $wishList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WishList  $wishList
     * @return \Illuminate\Http\Response
     */
    public function destroy($product, Request $request)
    {
        Wishlist::where('customer', $request->session()->get('loggedUser'))
            ->where('product', $product)
            ->delete();
        return redirect()->back();
    }
}
