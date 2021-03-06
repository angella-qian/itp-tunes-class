<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index() {
    	return view('login');
    }

    public function login() {

    	// BTS, auth knows to check these 2 variables and also encrypt the password
    	$loginWasSuccessful = Auth::attempt([
    		'email' => request('email'),
    		'password' => request('password')
    	]);

    	if ($loginWasSuccessful) {
    		return redirect('/admin/profile');
    	} else {
    		return redirect('/login');
    	}
    }

    public function logout() {
    	Auth::logout();
    	return redirect('/login');
    }
}
