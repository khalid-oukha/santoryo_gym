<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Repositories\Interfaces\UserRepositoryInterface;
use auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  protected $userRepository;

  public function __construct(UserRepositoryInterface $userRepository)
  {
    $this->userRepository = $userRepository;
  }

  public function showLoginForm()
  {
    return view('auth.login');
  }

  public function login(LoginRequest $request)
  {
    $credentials = $request->validated();

    if ($this->userRepository->attemptLogin($credentials)) {

      if (auth()->user()->isAdmin() || auth()->user()->isManager()) {
        return redirect('/admin/coachs');
      }
      return redirect('/');
    }

    return back()->withErrors([
      'email' => 'The provided email or password do not match',
    ])->onlyInput('email');
  }

  public function logout(Request $request)
  {
    $this->userRepository->logout();
    return redirect('login');
  }
}
