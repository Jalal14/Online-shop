<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; //to share variable
use Session;
use App\WishList;
use App\Cart;
use App\Gender;
use App\Company;
use App\Category;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['users.*', 'public.home', 'products.*'], function ($view){
            $cartCount = 0;
            $wishCount = 0;
            $userWishList = [];
            $genderList = Gender::all();
            $companyList = Company::all();
            $categoryList = Category::all();
            $topCategories = DB::table('view_popular_categories')
                ->limit(4)
                ->get();
            if(Session::has('loggedUser')){
                $user = Session('loggedUser');
                $wishCount = WishList::where('customer', $user)->count();
                $userWishList = WishList::where('customer', $user)->pluck('product')->toArray();
                $cartCount = Cart::where('customer', $user)->sum('quantity');
            }
            $view->with('wishCount', $wishCount)
                ->with('cartCount', $cartCount)
                ->with('userWishList', $userWishList)
                ->with('genderList', $genderList)
                ->with('companyList', $companyList)
                ->with('categoryList', $categoryList)
                ->with('topCategories', $topCategories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
