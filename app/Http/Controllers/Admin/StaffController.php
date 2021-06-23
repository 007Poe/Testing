<?php

namespace App\Http\Controllers\Admin;

use App\Staff;
use App\Position;
use App\Team;
use App\SkillStaff;
use App\SkillType;
use App\Skill;
use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
	{
		$staffs = Staff::latest()->get();
		return view('Admin.staff.index', compact('staffs'));
	}

	public function create()
	{
		$teams = Team::all();
		$positions = Position::all();
		$skilltypes = SkillType::first();
		$skills = Skill::where('skill_type_id',$skilltypes->id)->get();
		return view('Admin.staff.insert', compact('teams','positions','skills'));
	}

	public function edit(Staff $staff)
	{
		$skills=$staff->skills->groupBy('skill_type_id');
		return view('Admin.staff.edit', compact('staff','skills'));
	}

	public function store(Request $request)
	{
		// dd($request->all());
		$this->validate($request,[
			'staff_name' => 'required|min:3',
			'nrc' => 'required',
			'dob' => 'required',
			'codeno' => 'required',
			'email' => 'required|email|unique:staff',
			'position' => 'required',
			'team' => 'required',
			'image' => 'required',
			'degree' => 'required',
			'address' => 'required',
			'phno' => 'required',
			'experience' => 'required',
			'skill.*' => 'required_unless:type_of_content,is_information',
		]);

        //dd($request->all());
		//Staff::create($request->all());

		$data = $request['image'];

		list($type,$data) = explode(';', $data);

		list( , $data) = explode(',', $data);

		$data = base64_decode($data);

		$imgName = time().'.png';

		$path = public_path('/img/staff_images/');

		if(!File::isDirectory($path)){
        	File::makeDirectory($path, 0777, true, true);
    	}

		file_put_contents($path . $imgName, $data);

        // $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        // $destinationPath = public_path('/img/staff_images');

        // $image->move($destinationPath, $input['imagename']);

		$staff = new Staff;
		$staff->name=$request->staff_name;
		$staff->nrc=$request->nrc;
		$staff->dob=$request->dob;
		$staff->image=$imgName;
		$staff->codenumber=$request->codeno;
		$staff->phonenumber=$request->phno;		
		$staff->address=$request->address;
		$staff->degree=$request->degree;
		$staff->email=$request->email;
		$staff->team_id=$request->team;
		$staff->position_id=$request->position;
		$staff->experience=$request->experience;		
		$staff->save();

		foreach ($request->skill as $key => $skill) {
			$staff_skill = new SkillStaff;
			$staff_skill->staff_id=$staff->id;
			$staff_skill->skill_id=$key;
			$staff_skill->percent=$skill;
			$staff_skill->save();
		}

		return redirect('/view_staff');
       // return view('staff.insert', compact('position','team'));
	}

	public function show(Staff $staff)
	{
		$skilltypes=$staff->skills->groupBy('skill_type_id');
		return view('Admin.staff.show', compact('staff','skilltypes'));
	}

	public function update(Request $request,Staff $staff)
	{
		$this->validate($request,[
			'name' => 'required|min:5',
			'nrc' => 'required',
			'dob' => 'required',
			'codenumber' => 'required',
			'email' => 'required',
			'position_id' => 'required',
			'team_id' => 'required',
			'degree' => 'required',
			'address' => 'required',
			'phonenumber' => 'required',
			'experience' => 'required',
			'skill.*' => 'required_unless:type_of_content,is_information',
		]);

		if (!is_null($request['staff_image']))
        {
            $data = $request['staff_image'];

            list($type,$data) = explode(';', $data);

            list( , $data) = explode(',', $data);

            $data = base64_decode($data);

            $request['image'] = time().'.png';

            $path = public_path('/img/staff_images/');

            if(!File::isDirectory($path)){
            	File::makeDirectory($path, 0777, true, true);
            }

            file_put_contents($path . $request['image'], $data);
                       
        } 

        // dd($staff);

		$staff->update($request->all());

		foreach ($request->skill as $key => $skill) {
			$staff_skill = SkillStaff::find($key);
			$request['percent']=$skill;
			$staff_skill->update($request->all());
		}

		return redirect('/view_staff');
	}

	/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function destroy(Staff $staff)
	{
		$staff->delete();
		return redirect('/view_staff');
	}
}
