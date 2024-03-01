<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        $form = $request->validated();
        // dd($form);


        $form['password'] = Hash::make($form['password']);

        if($this->userRepository->createUser($form)){
            return redirect('/');
        }


    }
}
