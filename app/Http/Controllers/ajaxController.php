<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ajaxController extends Controller
{
	public function show()
	{
		return view('register');
	}

    public function authlogin(Request $request)
    {
    	$validator = Validator::make($request->all(),[

    					'email' => 'required',
      					'password' => 'required'

    				]);

    	if ($validator->passes()) 
    	{

    		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
		      // Аутентификация успешна

    		return response()->json(['success'=>'Вы авторизованы']);

		      //return redirect()->intended('dashboard');

		    }
		    
		    return response()->json(['error'=>'Вы не авторизованы']);
    		
    	}

    	return response()->json(['error'=>$validator->messages()]);

    	/*if (Auth::attempt(['email' => $email, 'password' => $password])) {
      // Аутентификация успешна
	      return redirect()->intended('dashboard');
	    }*/

    }

    public function loginreg()
    {
        # code...
    }
}
