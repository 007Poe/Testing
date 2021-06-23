<?php

namespace App\Http\Controllers;

use App\Staff;
use App\SkillStaff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('abouts.index',compact('staffs'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $staff = Staff::findorFail($id);
        return view('profile.index',compact('staff'));
    }

}
