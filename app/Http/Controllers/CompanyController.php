<?php

namespace App\Http\Controllers;

use App\Company;
use App\Category;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $categoryList = Category::all();
        $companyList = Company::all();
        return view('moderator.company.company-list')
                ->with('companyList', $companyList)
                ->with('categoryList', $categoryList);
    }

    public function create()
    {
        return view('moderator.company.add-company');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail | required | unique:tbl_company,name',
            'logo'     => 'bail|required|image|mimes:jpeg,png'
        ]);
        $company = new Company();
        $company->name = $request->name;
        $company->save();
        $file = $request->file('logo');
        $fileName = $company->id.".".$file->getClientOriginalExtension();
        $company->logo = 'company/'.$fileName;
        if ($company->save() == 1) {
            $file->move('images/company', $fileName);
        }
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    public function edit($id, Request $request)
    {
        $company = Company::find($id);
        return view('moderator.company.update-company')
                ->with('company', $company);
    }

    public function update(Request $request, Company $company)
    {
        $this->validate($request, [
            'name' => 'bail | required',
            'logo'     => 'bail | image | mimes:jpeg,png'
        ]);

        $company = Company::find($request->id);
        $company->name = $request->name;
        if ($request->files->count()!=0){
            $file = $request->file('logo');
            $fileName = $company->id.".".$file->getClientOriginalExtension();
            $company->logo = 'company/'.$fileName;
            $file->move('images/company', $fileName);
        }
        $company->save();
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
