<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm(){
        return view('auth.forgotpassword');
    }


    public function ResetPasswordRequest(Request $request){
        $user = User::getEmailChecked($request->email);

        if(!empty($user))
        {
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user)->send(new ForgotPasswordMail($user));
            return redirect('login')->with('success', "Please check your email and reset your password");
        }
        else
        {
            return redirect('auth.forgotpassword')->with('error', "User not found");
        }

    }


}
