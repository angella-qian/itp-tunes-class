<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;

class SignUpController extends Controller
{
    public function index() {
    	return view('signup');
    }

    public function signup() {
    	$user = new User();

    	// Capture sign up form email value
    	$user->email = request('email');
    	$user->password = Hash::make(request('password'));		// bcrypt
    	$user->save();

        Auth::login($user);
        return redirect('/admin/profile');

    	// return redirect('/login');
    }
}
