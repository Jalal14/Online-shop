<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Gender;
use App\Company;
use App\Category;
use App\Specifications;
use App\Details;

class HomeController extends Controller
{
    public function index()
    {
        $topBrands = DB::table('view_popular_companies')
                    ->limit(5)
                    ->get();
        $bestSales = DB::table('view_products')
                        ->where('status', '!=',5)
                        ->orderBy('sold', 'desc')
                        ->limit(5)
                        ->get();
        if ($bestSales->count() > 0){
            foreach ($bestSales as $bestSale){
                $bestSale->dis_price = (int)$bestSale->sell_price - ($bestSale->sell_price * $bestSale->discount / 100);
                $bestSale->details = Details::where('product', $bestSale->id)
                                        ->pluck('details')
                                        ->first();
                $bestSale->details = str_limit($bestSale->details, 20, '...');
            }
        }
        $newProducts = DB::table('view_products')
                        ->where('status', '!=',5)
                        ->orderBy('added', 'desc')
                        ->limit(5)
                        ->get();
        if ($newProducts->count() > 0){
            foreach ($newProducts as $newProduct){
                $newProduct->dis_price = (int)$newProduct->sell_price - ($newProduct->sell_price * $newProduct->discount / 100);
                $newProduct->details = Details::where('product', $newProduct->id)
                    ->pluck('details', 'details')
                    ->first();
                $newProduct->details = str_limit($newProduct->details, 20, '...');
            }
        }
        return view('public.home')
                ->with('topBrands', $topBrands)
                ->with('bestSales', $bestSales)
                ->with('newProducts', $newProducts);

    }
    public function bestSale()
    {
        $title = "Best selling products";
        $productList = DB::table('view_products')
                        ->orderBy('sold')
                        ->limit(15)
                        ->get();
        if ($productList->count() > 0){
            foreach ($productList as $product){
                $product->dis_price = (int)$product->sell_price - ($product->sell_price * $product->discount / 100);
                $product->details = Details::where('product', $product->id)
                    ->pluck('details', 'details')
                    ->first();
                $product->details = str_limit($product->details, 20, '...');
            }
        }
        return view('products.product-list')
            ->with('title', $title)
            ->with('productList', $productList);
    }
    public function newArrivals()
    {
        $title = "New arrivals";
        $productList = DB::table('view_products')
            ->orderBy('added', 'desc')
            ->limit(15)
            ->get();
        if ($productList->count() > 0){
            foreach ($productList as $product){
                $product->dis_price = (int)$product->sell_price - ($product->sell_price * $product->discount / 100);
                $product->details = Details::where('product', $product->id)
                    ->pluck('details', 'details')
                    ->first();
                $product->details = str_limit($product->details, 20, '...');
            }
        }
        return view('products.product-list')
            ->with('title', $title)
            ->with('productList', $productList);
    }
    public function prductDetails($id, Request $request)
    {
        $product = DB::table('view_products')
                        ->where('id', $id)
                        ->where('status', '!=', 5)
                        ->first();
        if($product == null){
            return redirect()->route('home.index');
        }
        if ($product->discount > 0){
            $product->dis_price = $product->sell_price - ($product->sell_price * $product->discount /100);
        }
        $specificationList = Specifications::where('product', $id)
                                    ->get();
        $detailsList = Details::where('product', $id)
                                    ->get();
        return view('products.product-details')
                ->with('product', $product)
                ->with('specificationList', $specificationList)
                ->with('detailsList', $detailsList);
    }
    public function companyList()
    {
        return view('products.company-list');
    }
    public function productsByCompany($id, Request $request)
    {
        $title = Company::where('id', $id)
                        ->pluck('name')
                        ->first();
        $productList = DB::table('view_products')
                        ->where('company', $id)
                        ->get();
        if ($productList->count() > 0){
            foreach ($productList as $product){
                $product->dis_price = (int)$product->sell_price - ($product->sell_price * $product->discount / 100);
                $product->details = Details::where('product', $product->id)
                    ->pluck('details', 'details')
                    ->first();
                $product->details = str_limit($product->details, 20, '...');
            }
        }
        return view('products.products-by-company')
            ->with('productList', $productList)
            ->with('title', $title);
    }
    public function productsByCategory($id, Request $request)
    {
        $title = Category::where('id', $id)
            ->pluck('name')
            ->first();
        $productList = DB::table('view_products')
            ->where('category', $id)
            ->get();
        if ($productList->count() > 0){
            foreach ($productList as $product){
                $product->dis_price = (int)$product->sell_price - ($product->sell_price * $product->discount / 100);
                $product->details = Details::where('product', $product->id)
                    ->pluck('details', 'details')
                    ->first();
                $product->details = str_limit($product->details, 20, '...');
            }
        }
        return view('products.products-by-category')
            ->with('productList', $productList)
            ->with('title', $title);
    }
}
