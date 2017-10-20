<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  use AuthenticatesUsers;

  /**
  * Where to redirect users after login.
  *
  * @var string
  */

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest', ['except' => 'destroy']);
  }

  public function create()
  {

    return view('login.create');

  }

  public function store()
  {

    if (!auth()->attempt(request(['username', 'password'])))
    {
      return back()->withErrors([
        'message' => 'O nome de usuário e/ou a senha foram digitados incorretamente.'
      ]);

    }
    return redirect('/');

  }

  public function destroy()
  {
    //auth()->logout()->
    auth()->logout();
    session()->flush();
    session()->regenerate();
    return redirect('/');
  }

}
