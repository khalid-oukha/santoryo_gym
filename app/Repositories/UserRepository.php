<?php

namespace App\Repositories;

use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{
    public function attemptLogin(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return true;
        }
        return false;
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    }

    public function createUser(array $credentials)
    {
        $user = User::create($credentials);
        if($user){
            $memberRole = Role::where('name','member')->first();
            // dd($memberRole);
            $user->roles()->attach($memberRole->id);
            auth()->login($user);
            return true;
        }
        return false;

    }
}
