<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\UserProfileRequest;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Gender;
use App\Company;
use App\Category;
//use App\Cart;
//use App\Order;
//use App\Invoice;

class UserController extends Controller
{
    public function cartList(Request $request)
    {
//        $genderList = Gender::all();
//        $companyList = Company::all();
//        $categoryList = Category::all();
        return view('users.cart-list');
//            ->with('genderList', $genderList)
//            ->with('companyList', $companyList)
//            ->with('categoryList', $categoryList);
    }
    public function editProfile(Request $request)
    {
//        $genderList = Gender::all();
//        $companyList = Company::all();
//        $categoryList = Category::all();
        $user = User::find($request->session()->get('loggedUser'));
        $invoiceList = DB::table('view_invoices')
            ->where('customer', $user->id)
            ->get();
        return view('users.profile')
//            ->with('genderList', $genderList)
//            ->with('companyList', $companyList)
//            ->with('categoryList', $categoryList)
            ->with('user', $user)
            ->with('invoiceList', $invoiceList);
    }
    public function updateProfile(UserProfileRequest $request)
    {
        $user = User::find($request->session()->get('loggedUser'));
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->route('user.editProfile');
    }

    public function editPassword(Request $request)
    {
//        $genderList = Gender::all();
//        $companyList = Company::all();
//        $categoryList = Category::all();
        return view('users.update-password');
//            ->with('genderList', $genderList)
//            ->with('companyList', $companyList)
//            ->with('categoryList', $categoryList);
    }
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'currentPassword'   =>  'bail | required',
            'newPassword'       =>  'bail | required | min:8',
            'confirmNewPassword'=>  'same:newPassword'
        ]);
        $user = User::find($request->session()->get('loggedUser'));
        if (json_decode(Crypt::decryptString($user->password)) == $request->currentPassword){
            $user->password = Crypt::encryptString(json_encode($request->newPassword));
            $user->save();
            $request->session()->flash('msg', 'Password updated.');
        }else{
            $request->session()->flash('msg', 'Incorrect password.');
        }
        return redirect()->route('user.editPassword');
    }
}
