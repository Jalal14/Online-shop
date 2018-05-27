<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function adminLogout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('admin.login');
    }
    public function userLogout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('admin.login');
    }
}
