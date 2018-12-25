<?php

namespace App\Http\Controllers;

use App\Product;
use App\Company;
use App\Category;
use App\Status;
use App\BuyHistory;
use App\Details;
use App\Specifications;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $categoryList = Category::all();
        $companyList = Company::all();
        $productList = DB::table('view_product')->get();
        return view('moderator.product.product-list')
                ->with('productList', $productList)
                ->with('categoryList', $categoryList)
                ->with('companyList', $companyList);
    }

    public function create()
    {
        $categoryList = Category::all();
        $companyList = Company::all();
        $statusList = Status::where('id', 3)
                            ->orWhere('id', 4)
                            ->orWhere('id', 5)
                            ->get();
        return view('moderator.product.add-product')
                ->with('categoryList', $categoryList)
                ->with('companyList', $companyList)
                ->with('statusList', $statusList);
    }

    public function store(ProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->company = $request->company;
        $product->buy_price = ($request->totalPrice/$request->quantity);
        $product->sell_price = $request->price;
        $product->available = $request->quantity;
        $product->sold = 0;
        $product->status = $request->status;
        $product->discount = $request->discount;
        $product->added = date('Y-m-d');
        if ($product->save() == 1) {
            $file = $request->file('image');
            $fileName = $product->id.".".$file->getClientOriginalExtension();
            $product->image = 'products/'.$fileName;
            $file->move('images/products', $fileName);
            $product->save();
        }
        foreach ($request->details as $detail){
            $details[] = ['id' => null, 'product' => $product->id, 'details' => $detail ];
        }
        DB::table('tbl_details')->insert($details);
        $index = 0;
        foreach ($request->specTitle as $specTitle){
            $specifications[] = ['id' => null, 'product' => $product->id, 'title' => $specTitle, 'specification' => $request->specDesc[$index++] ];
        }
        DB::table('tbl_specification')->insert($specifications);
        $buyHistory = new BuyHistory();
        $buyHistory->product = $product->id;
        $buyHistory->quantity = $request->quantity;
        $buyHistory->total_price = $request->totalPrice;
        $buyHistory->sell_price = $request->price;
        $buyHistory->buy_date = date('Y-m-d');
        $buyHistory->employee = $request->session()->get('loggedMod');
        $buyHistory->save();
        return redirect()->route('product.index');
    }

    public function show($id, Product $product)
    {
        $product = DB::table('view_product')
            ->where('id', $id)
            ->first();
        if ($product->discount > 0){
            $product->discount_price = $product->sell_price - ($product->sell_price * $product->discount / 100);
        }
        $details = Details::where('product', $product->id)
                            ->get();
        $specifications = Specifications::where('product', $product->id)
                                            ->get();
        return view('moderator.product.delete-product')
            ->with('product', $product)
            ->with('details', $details)
            ->with('specifications', $specifications);
    }

    public function edit($id, Request $request)
    {
        $product = Product::find($id);
        $companyList = Company::all();
        $categoryList = Category::all();
        $statusList = Status::where('id', 3)
                        ->orWhere('id', 4)
                        ->orWhere('id', 5)
                        ->get();
        $details = DB::table('tbl_details')
                    ->where('product', $id)
                    ->get();
        $specifications = DB::table('tbl_specification')
                    ->where('product', $id)
                    ->get();
        return view('moderator.product.update-product')
                ->with('product', $product)
                ->with('companyList', $companyList)
                ->with('categoryList', $categoryList)
                ->with('statusList', $statusList)
                ->with('details', $details)
                ->with('specifications', $specifications);
    }

    public function update($id, UpdateProductRequest $request)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->sell_price = $request->price;
        $product->discount = $request->discount;
        $product->category = $request->category;
        $product->company = $request->company;
        $product->status = $request->status;
        if ($request->file('image') != null){
            $file = $request->file('image');
            $fileName = $product->id.".".$file->getClientOriginalExtension();
            $product->image = 'products/'.$fileName;
            $file->move('images/products', $fileName);
        }
        $product->save();
        Details::where('product', $product->id)
                ->delete();
        Specifications::where('product', $product->id)
                ->delete();
        foreach ($request->details as $detail){
            $details[] = ['id' => null, 'product' => $product->id, 'details' => $detail ];
        }
        DB::table('tbl_details')->insert($details);
        $index = 0;
        foreach ($request->specTitle as $specTitle){
            $specifications[] = ['id' => null, 'product' => $product->id, 'title' => $specTitle, 'specification' => $request->specDesc[$index++] ];
        }
        DB::table('tbl_specification')->insert($specifications);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function addQuantity($id, Request $request)
    {
        $product = DB::table('view_product')
                    ->where('id', $id)
                    ->first();
        return view('moderator.product.add-quantity')
                ->with('product', $product);
    }
    public function storeQuantity(Request $request)
    {
        $this->validate($request, [
            'total'     => 'bail | required | numeric | min:1',
            'quantity'  => 'bail | required | numeric | min:1',
        ]);
        $product = Product::find($request->id);
        $product->available = $product->available + $request->quantity;
        $product->buy_price = ($request->total / $request->quantity);
        $product->save();
        $buyHistory = new BuyHistory();
        $buyHistory->product = $product->id;
        $buyHistory->quantity = $request->quantity;
        $buyHistory->total_price = $request->total;
        $buyHistory->sell_price = $product->sell_price;
        $buyHistory->buy_date = date('Y-m-d');
        $buyHistory->employee = $request->session()->get('loggedMod');
        $buyHistory->save();
        return redirect()->route('product.index');
    }
    public function deleteDetails($id, Request $request)
    {
        $details = Details::find($id);
        $product = DB::table('view_product')
                    ->where('id', $details->product)
                    ->first();
        return view('moderator.product.delete-details')
                ->with('details', $details)
                ->with('product', $product);
    }
    public function destroyDetails(Request $request)
    {
        $detail = Details::find($request->id);
        $detail->delete();
        return redirect()->route('product.show', [$request->product]);
    }
    public function deleteSpecification($id, Request $request)
    {
        $specification = Specifications::find($id);
        $product = DB::table('view_product')
                    ->where('id', $specification->product)
                    ->first();
        return view('moderator.product.delete-specification')
                ->with('specification', $specification)
                ->with('product', $product);
    }
    public function destroySpecification(Request $request)
    {
        $specification = Specifications::find($request->id);
        $specification->delete();
        return redirect()->route('product.show', [$request->product]);
    }
}
