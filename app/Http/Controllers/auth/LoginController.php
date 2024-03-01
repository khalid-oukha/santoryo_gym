<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function showLoginForm()
  {
    return view('auth.login');
  }
  public function login(LoginRequest $request)
  {
    $form = $request->validated();

    if (Auth::attempt($form)) {
      $request->session()->regenerate();
      return redirect('/');
    }

    return back()->onlyInput('email');
  }

  public function logout(Request $request)
  {
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('login');
  }
}
