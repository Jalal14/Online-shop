<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Company;
use App\Category;

class CompanyController extends Controller
{
    public function index()
    {
        $categoryList = Category::all();
        $companyList = Company::paginate(20);
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
            'name' => 'bail | required | unique:tbl_companies,name',
            'logo'     => 'bail|required|image|mimes:jpeg,png'
        ]);
        $company = new Company();
        $company->name = $request->name;
        $company->save();
        $image = $request->file('logo');
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(100,100);
        $imageName = $company->id.".".$image->getClientOriginalExtension();
        $company->logo = 'company/'.$imageName;
        if ($company->save() == 1) {
            $image_resize->save(public_path('images/company'
                .$imageName));
        }
        return redirect()->route('company.index');
    }

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
            $image = $request->file('logo');
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(100,100);
            $imageName = $company->id.".".$image->getClientOriginalExtension();
            $company->logo = 'company/'.$imageName;
            $image_resize->save(public_path('images/company/'
                .$imageName));
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
