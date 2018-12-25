<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistrationToken;
use App\RegistrationRequest;
use App\User;

class RegistrationController extends Controller
{
    public function regToken($token, $id, Request $request)
    {
        $token = RegistrationToken::where('id', $id)
                                ->where('token', $token)
                                ->first();
        if ($token != null && $token->verified == 0){
            $regReq = RegistrationRequest::where('email', $token->email)
                                        ->first();
            $user = new User();
            $user->name = $regReq->name;
            $user->email = $regReq->email;
            $user->password = $regReq->password;
            $user->phone = $regReq->phone;
            $user->address = $regReq->address;
            $user->join_date = date('Y-m-d');
            $user->point = 0;
            if ($user->save() == 1){
                $regReq->delete();
                $token->verified = 1;
                $token->save();
                $request->session()->flash('msg', 'Account activated, please login');
            }else{
                $request->session()->flash('msg', 'Something wrong happened, please try again');
            }
        }
        else{
            $request->session()->flash('msg', 'Token has expired');
        }
        return redirect()->route('home.index');
    }
}
