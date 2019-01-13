<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Intervention\Image\ImageManagerStatic as Image;
use App\Product;
use App\Company;
use App\Category;
use App\Status;
use App\BuyHistory;
use App\Details;
use App\Specifications;
use App\Transaction;

class ProductController extends Controller
{
    public function index()
    {
        $categoryList = Category::all();
        $companyList = Company::all();
        $productList = DB::table('view_products')->paginate(10);
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
            $image = $request->file('image');
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(250, 250);
            $imageName = $product->id.".".$image->getClientOriginalExtension();
            $image_resize->save(public_path('images/products/'.$imageName));
            $product->image = 'products/'.$imageName;
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
        DB::table('tbl_specifications')->insert($specifications);
        $buyHistory = new BuyHistory();
        $buyHistory->product = $product->id;
        $buyHistory->quantity = $request->quantity;
        $buyHistory->total_price = $request->totalPrice;
        $buyHistory->sell_price = $request->price;
        $buyHistory->buy_date = date('Y-m-d');
        $buyHistory->employee = $request->session()->get('loggedMod');
        $buyHistory->save();
        $transaction = new Transaction();
        $transaction->amount = $buyHistory->total_price;
        $transaction->tr_date = $buyHistory->buy_date;
        $transaction->type = 2;
        $transaction->acc_by = $buyHistory->employee;
        $transaction->buy_id = $buyHistory->id;
        $transaction->save();
        return redirect()->route('product.show', [$product->id]);
    }

    public function show($id, Product $product)
    {
        $product = DB::table('view_products')
            ->where('id', $id)
            ->first();
        if ($product->discount > 0){
            $product->discount_price = $product->sell_price - ($product->sell_price * $product->discount / 100);
        }
        $details = Details::where('product', $product->id)
                            ->get();
        $specifications = Specifications::where('product', $product->id)
                                            ->get();
        return view('moderator.product.show-product')
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
        $specifications = DB::table('tbl_specifications')
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
        if ($request->file('image') != null) {
            $image = $request->file('image');
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(250, 250);
            $imageName = $product->id . "." . $image->getClientOriginalExtension();
            $image_resize->save(public_path('images/products/' . $imageName));
            $product->image = 'products/' . $imageName;
            $product->save();
        }
        $product->save();
        Details::where('product', $product->id)
            ->delete();
        Specifications::where('product', $product->id)
            ->delete();
        if ($request->details != null) {
            foreach ($request->details as $detail) {
                $details[] = ['id' => null, 'product' => $product->id, 'details' => $detail];
            }
            DB::table('tbl_details')->insert($details);
        }
        if ($request->specTitle != null){
            $index = 0;
            foreach ($request->specTitle as $specTitle) {
                $specifications[] = ['id' => null, 'product' => $product->id, 'title' => $specTitle, 'specification' => $request->specDesc[$index++]];
            }
            DB::table('tbl_specifications')->insert($specifications);
        }
        return redirect()->route('product.show', [$product->id]);
    }

    public function destroy(Product $product)
    {
        //
    }
    public function addQuantity($id, Request $request)
    {
        $product = DB::table('view_products')
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
        $transaction = new Transaction();
        $transaction->amount = $buyHistory->total_price;
        $transaction->tr_date = $buyHistory->buy_date;
        $transaction->type = 2;
        $transaction->acc_by = $buyHistory->employee;
        $transaction->buy_id = $buyHistory->id;
        $transaction->save();

        return redirect()->route('product.index');
    }
//    public function deleteDetails($id, Request $request)
//    {
//        $details = Details::find($id);
//        $product = DB::table('view_products')
//                    ->where('id', $details->product)
//                    ->first();
//        return view('moderator.product.delete-details')
//                ->with('details', $details)
//                ->with('product', $product);
//    }
//    public function destroyDetails(Request $request)
//    {
//        $detail = Details::find($request->id);
//        $detail->delete();
//        return redirect()->route('product.show', [$request->product]);
//    }
//    public function deleteSpecification($id, Request $request)
//    {
//        $specification = Specifications::find($id);
//        $product = DB::table('view_products')
//                    ->where('id', $specification->product)
//                    ->first();
//        return view('moderator.product.delete-specification')
//                ->with('specification', $specification)
//                ->with('product', $product);
//    }
//    public function destroySpecification(Request $request)
//    {
//        $specification = Specifications::find($request->id);
//        $specification->delete();
//        return redirect()->route('product.show', [$request->product]);
//    }
}
