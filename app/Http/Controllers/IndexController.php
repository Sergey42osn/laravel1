<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    //

    public function index()
    {

    	return view('home-page');

    }

        public function profile()
    {

    	return view('profile-page');

    }

        public function authlogin(Request $request)
    {
    	$this->validate($request, [
								    'email' => 'required|unique:posts',
								    'password' => 'required',
								  ]);

    	if (Auth::attempt(['email' => $email, 'password' => $password])) {
      // Аутентификация успешна
	      return redirect()->intended('dashboard');
	    }

    }
}
