<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillStaff extends Model
{
	protected $fillable = [
		'percent'
	];
	
	public function skill(){

		return $this->belongsTo(Skill::class);
	}
}
