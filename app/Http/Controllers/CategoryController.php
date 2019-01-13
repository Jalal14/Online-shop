<?php

namespace App\Http\Controllers;

use App\Category;
use App\Company;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $companyList = Company::all();
        $categoryList = Category::all();
        return view('moderator.category.category-list')
                ->with('categoryList', $categoryList)
                ->with('companyList', $companyList);
    }

    public function create()
    {
        return view('moderator.category.add-category');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail | required | unique:tbl_categories,name',
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    public function edit($id, Request $request)
    {
        $category = Category::find($id);
        return view('moderator.category.update-category')
                ->with('category', $category);
    }

     public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail | required | unique:tbl_categories,name',
        ]);
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
