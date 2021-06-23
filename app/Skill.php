<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
     'name',
     'skill_type_id'
    ];

	public function skillType(){

		return $this->belongsTo(SkillType::class);
	}

	public function Staffs()
	{
		return $this->belongsToMany('App\Staff');
	}
}
