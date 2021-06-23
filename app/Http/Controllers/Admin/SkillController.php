<?php

namespace App\Http\Controllers\Admin;

use App\Skill;
use App\SkillType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
	 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        //
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$skill_types = SkillType::latest()->get();
        return view('Admin.skill.insert', compact('skill_types'));
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
        	'skill_name' => 'required',
			'skill_type' => 'required'
		]);

		$skill = new Skill;
		$skill->name=$request->skill_name;	
		$skill->skill_type_id=$request->skill_type;		
        $skill->save();

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

    //get skill when create staff and change department
    public function getSkill(Request $request,$id)
    {
        $skills = Skill::where('skill_type_id', $id)->get();

        return response()->json(['skills'=>$skills]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('Admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Skill $skill)
    {
        $this->validate($request,[
            'name' => 'required',
            'skill_type_id' => 'required'
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
    public function destroy(Skill $skill)
    {
        $skill->delete();
        
        return redirect('/view_skilltype_skill');
    }
}
