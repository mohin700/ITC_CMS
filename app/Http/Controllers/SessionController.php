<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
	public function index(){

		return view('login');
	}

	public function login(Request $request){

		//Validate
		$this->validate($request, [

		    'email'  	=> 'required|email',
		    'password'  => 'required',

		]);
	


		if (! auth()->attempt(request(['email', 'password']))) {
	        return back()->with('error', 'Please Insert Valid Credentials');
	    }

	    if(Auth::check() && auth()->user()->role->level === 1 ){
	        return redirect()->route('employee.all');
	    }elseif (Auth::check() && auth()->user()->role->level === 2) {
	        return redirect()->route('editor.dashboard');
	    }elseif (Auth::check() && auth()->user()->role->level === 3) {
	        return redirect()->route('viewer.dashboard');
	    }

	}


	public function logout(){
	    auth()->logout();
	    return redirect()->route('login');
	}
    
}
