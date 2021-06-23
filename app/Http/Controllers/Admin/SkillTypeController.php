<?php

namespace App\Http\Controllers\Admin;

use App\SkillType;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillTypeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $skill_types = SkillType::latest()->get();
        $skills = Skill::latest()->get();
        return view('Admin.skill_type.index',compact('skill_types','skills'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.skill_type.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
			'skill_type_name' => 'required'
		]);

		$skill_type = new SkillType;
		$skill_type->name=$request->skill_type_name;		
        $skill_type->save();

		return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SkillType $skill)
    {
        return view('Admin.skill_type.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,SkillType $skill)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $skill->update($request->all());

        return redirect('/view_skilltype_skill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SkillType $skill)
    {
        $skill->delete();

        return redirect('/view_skilltype_skill');
    }
}
