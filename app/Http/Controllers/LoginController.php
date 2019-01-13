<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('moderator.login');
    }
    public function adminLogin(Request $request)
    {
        $admin = DB::table('view_admins')
                    ->where('uname', $request->username)
                    ->first();
//        $admin = DB::table('view_admins')
//                    ->first();
//        echo Crypt::decryptString($admin->password);
//        die();
        if (Crypt::decryptString($admin->password) == $request->password){
            if ($admin->status == 1){
                $request->session()->put('loggedMod', $admin->id);
                if ($admin->role == 'Admin'){
                    $request->session()->put('loggedAdmin', $admin->id);
                }
                return redirect()->route('admin.index');
            }else{
                $request->session()->flash('msg', "Your account is deactivated");
            }
        }else{
            $request->session()->flash('msg', "Wrong username or password");
        }
        return redirect()->route('admin.login');
    }
}
