<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest')->except('destroy','index');
    }

    public function index()
    {
    	return view('Admin.home.index');
    }

    public function login()
    {
    	return view('Admin.auth.login');
    }

    public function store()
    {
    	if(! auth()->attempt(request(['email','password']))){
    		return back()->withInput()->withErrors(trans('auth.failed'));;
    	}

    	return redirect('/home');
    }

    public function destroy()
    {
    	auth()->logout();

    	return redirect('/login');
    }
}
