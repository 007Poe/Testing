<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceType;
use App\Staff;

class HomePageController extends Controller
{
    public function index()
    {
    	$service_types = ServiceType::all(); 
    	$staffs = Staff::staff();
        return view('welcome',compact('service_types','staffs'));

    }

    public function contact()
    {
    	return view('contacts.index');
    }

    public function comming_soon()
    {
        return view('pages.comming_soon');
    }
}
