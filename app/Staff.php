<?php

namespace App;

use App\Team;
use App\Staff;
use App\Position;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
     'name',
     'nrc',
     'dob',
     'image',
     'codenumber',
     'phonenumber',
     'address',
     'degree',
     'email',
     'team_id',
     'position_id',
     'experience'
    ];

    protected $table = 'staff';

    public static function staff(){
    	return Staff::all();
    }

	public function position(){

		return $this->belongsTo(Position::class);
	}

	public function team(){

		return $this->belongsTo(Team::class);
	}

    public function skillstaff(){

        return $this->hasMany(SkillStaff::class);
    }

    public function skills()
    {
        return $this->belongsToMany('App\Skill','skill_staffs','staff_id')->withPivot('id','percent');
   
    }
}
