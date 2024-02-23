<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    //
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $form = $request->validated();
        // dd($form);
        $form['password'] = Hash::make($form['password']);
        $user = User::create($form);
        auth()->login($user);
        return redirect('/');

    }
}
