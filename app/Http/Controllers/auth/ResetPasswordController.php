<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class ResetPasswordController extends Controller
{
    public function reset($token){
        // dd($token);
        $user = User::getTokenSingle($token);
        if(!empty($user)){

            return view('auth.resetpassword',compact('user'));
        }else{
            abort(404);
        }
    }

    public function GetnewPassword(Request $request){
        if($request->password == $request->cpassword){
            $user = User::getTokenSingle($request->remember_token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();
            redirect('auth.login')->with('success','pasword updated');
        }else{
            return redirect()->back()->with('error',"password and confirm password must match");
        }
    }
    
}