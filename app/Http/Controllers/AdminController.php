<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class AdminController extends Controller
{
    public function index() {
    	return view('admin/profile', [
    		'user' => Auth::user()
    	]);
    }

    public function settings() {
        $maintenance = DB::table('configurations')
        ->where('name', '=', 'maintenance')
        ->first();
        $value = $maintenance->value;

    	return view('admin/settings', [
            'value' => $value
        ]);
    }

    public function toggle(Request $request) {

        // If maintenance mode is checked, turn it on
        if ($request->input('maintenance')) {
            DB::table('configurations')
            ->where('name', '=', 'maintenance')
            ->update(['value' => 'on']);
        }

        // If maintenance mode is UNchecked, turn it off
        else {
            DB::table('configurations')
            ->where('name', '=', 'maintenance')
            ->update(['value' => 'off']);
        }

        return redirect('admin/settings');
    }

     public function maintenance() {
        return view('maintenance');
    }
}
