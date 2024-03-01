<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        if($user){
            $memberRole = Role::where('name','member')->first();
            // dd($memberRole);
            $user->roles()->attach($memberRole->id);
        }
        auth()->login($user);
        return redirect('/');

    }
}
