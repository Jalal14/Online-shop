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
        $msg = false;
        $adminList = DB::table('view_admin')
                    ->get();
        foreach ($adminList as $admin){
            if ($admin->uname == $request->username){
                $msg = true;
                if (Crypt::decryptString($admin->password) == $request->password){
                    if ($admin->status == 1){
                        $request->session()->put('loggedMod', $admin->id);
                        if ($admin->role == "Admin"){
                            $request->session()->put('loggedAdmin', $admin->id);
                        }
                        return redirect()->route('admin.index');
                    }else{
                        $msg = false;
                        $request->session()->flash('msg', "Your account is deactivated");
                        break;
                    }
                }
                break;
            }
        }
        if ($msg){
            $request->session()->flash('msg', "Wrong username or password");
        }
        return redirect()->route('admin.login');
    }
}
