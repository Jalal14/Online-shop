<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\User;
use App\RegistrationRequest;
use App\RegistrationToken;
use Mail;
use App\Mail\VerifyRegistrationMail;

class UserAjaxController extends Controller
{
    public function userLogin(Request $request)
    {
        $user = User::where('email', $request->email)
                        ->first();
        if ($user != null && Crypt::decryptString($user->password) == $request->password){
            $request->session()->put('loggedUser', $user->id);
            return 1;
        }else{
            return 0;
        }
    }
    public function checkEmail(Request $request)
    {
        $isExist = User::where('email', $request->email)->first();
        if ($isExist != null) {
            return 1;
        }else{
            $isExist = RegistrationRequest::where('email', $request->email)->first();
            if ($isExist != null) {
                return 1;
            }
            return 0;
        }
    }
    public function store(Request $request)
    {
        $regReq = new RegistrationRequest();
        $regReq->name = $request->name;
        $regReq->email = $request->email;
        $regReq->phone = $request->phone;
        $regReq->address = $request->address;
        $regReq->password = Crypt::encryptString($request->password);
        if ($regReq->save() == 1) {
            $token = new RegistrationToken();
            $token->email = $regReq->email;
            $token->token = sha1(time());
            $token->verified = 0;
            $token->save();
            Mail::send(new VerifyRegistrationMail($token));
            return 1;
        }
        return 0;
    }
}
