<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Gender;
use App\Company;
use App\Category;
use App\Specifications;
use App\Details;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $genderList = Gender::all();
        $companyList = Company::all();
        $categoryList = Category::all();
        $topCategories = DB::table('view_popular_categories')
                            ->limit(4)
                            ->get();
        $topBrands = DB::table('view_popular_companies')
                    ->limit(5)
                    ->get();
        $bestSales = DB::table('view_product')
                        ->orderBy('sold', 'desc')
                        ->limit(5)
                        ->get();
        if ($bestSales->count() > 0){
            foreach ($bestSales as $bestSale){
                $bestSale->details = Details::where('product', $bestSale->id)
                                        ->pluck('details', 'details')
                                        ->first();
            }
        }
        $newProducts = DB::table('view_product')
                        ->orderBy('added', 'desc')
                        ->limit(5)
                        ->get();
        if ($newProducts->count() > 0){
            foreach ($newProducts as $newProduct){
                $newProduct->details = Details::where('product', $newProduct->id)
                    ->pluck('details', 'details')
                    ->first();
            }
        }
        return view('public.home')
                ->with('genderList', $genderList)
                ->with('companyList', $companyList)
                ->with('categoryList', $categoryList)
                ->with('topBrands', $topBrands)
                ->with('bestSales', $bestSales)
                ->with('newProducts', $newProducts)
                ->with('topCategories', $topCategories);

    }
    public function bestSale()
    {
        $title = "Best selling products";
        $genderList = Gender::all();
        $companyList = Company::all();
        $categoryList = Category::all();
        $topCategories = DB::table('view_popular_categories')
                            ->limit(4)
                            ->get();
        $productList = DB::table('view_product')
                        ->orderBy('sold', 'desc')
                        ->limit(15)
                        ->get();
        if ($productList->count() > 0){
            foreach ($productList as $product){
                $product->details = Details::where('product', $product->id)
                    ->pluck('details', 'details')
                    ->first();
            }
        }
        return view('products.product-list')
            ->with('title', $title)
            ->with('genderList', $genderList)
            ->with('companyList', $companyList)
            ->with('categoryList', $categoryList)
            ->with('productList', $productList)
            ->with('topCategories', $topCategories);
    }
    public function newArrivals()
    {
        $title = "New arrivals";
        $genderList = Gender::all();
        $companyList = Company::all();
        $categoryList = Category::all();
        $topCategories = DB::table('view_popular_categories')
            ->limit(4)
            ->get();
        $productList = DB::table('view_product')
            ->orderBy('added', 'desc')
            ->limit(15)
            ->get();
        if ($productList->count() > 0){
            foreach ($productList as $product){
                $product->details = Details::where('product', $product->id)
                    ->pluck('details', 'details')
                    ->first();
            }
        }
        return view('products.product-list')
            ->with('title', $title)
            ->with('genderList', $genderList)
            ->with('companyList', $companyList)
            ->with('categoryList', $categoryList)
            ->with('productList', $productList)
            ->with('topCategories', $topCategories);
    }
    public function prductDetails($id, Request $request)
    {
        $genderList = Gender::all();
        $companyList = Company::all();
        $categoryList = Category::all();
        $product = DB::table('view_product')
                        ->where('id', $id)
                        ->first();
        $specificationList = Specifications::where('product', $id)
                                    ->get();
        $detailsList = Details::where('product', $id)
                                    ->get();
        return view('products.product-details')
                ->with('genderList', $genderList)
                ->with('companyList', $companyList)
                ->with('categoryList', $categoryList)
                ->with('product', $product)
                ->with('specificationList', $specificationList)
                ->with('detailsList', $detailsList);
    }
    public function companyList()
    {
        $genderList = Gender::all();
        $companyList = Company::all();
        $categoryList = Category::all();
        $topCategories = DB::table('view_popular_categories')
            ->limit(4)
            ->get();
        return view('products.company-list')
            ->with('genderList', $genderList)
            ->with('companyList', $companyList)
            ->with('categoryList', $categoryList)
            ->with('topCategories', $topCategories);
    }
    public function productsByCompany($id, Request $request)
    {
        $title = Company::where('id', $id)
                        ->pluck('name')
                        ->first();
        $genderList = Gender::all();
        $companyList = Company::all();
        $categoryList = Category::all();
        $topCategories = DB::table('view_popular_categories')
            ->limit(4)
            ->get();
        $productList = DB::table('view_product')
                        ->where('company', $id)
                        ->get();
        if ($productList->count() > 0){
            foreach ($productList as $product){
                $product->details = Details::where('product', $product->id)
                    ->pluck('details', 'details')
                    ->first();
            }
        }
        return view('products.products-by-company')
            ->with('genderList', $genderList)
            ->with('companyList', $companyList)
            ->with('categoryList', $categoryList)
            ->with('topCategories', $topCategories)
            ->with('productList', $productList)
            ->with('title', $title);
    }
    public function productsByCategory($id, Request $request)
    {
        $title = Category::where('id', $id)
            ->pluck('name')
            ->first();
        $genderList = Gender::all();
        $companyList = Company::all();
        $categoryList = Category::all();
        $topCategories = DB::table('view_popular_categories')
            ->limit(4)
            ->get();
        $productList = DB::table('view_product')
            ->where('category', $id)
            ->get();
        if ($productList->count() > 0){
            foreach ($productList as $product){
                $product->details = Details::where('product', $product->id)
                    ->pluck('details', 'details')
                    ->first();
            }
        }
        return view('products.products-by-category')
            ->with('genderList', $genderList)
            ->with('companyList', $companyList)
            ->with('categoryList', $categoryList)
            ->with('topCategories', $topCategories)
            ->with('productList', $productList)
            ->with('title', $title);
    }
}
