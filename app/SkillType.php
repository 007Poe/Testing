<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillType extends Model
{
    protected $fillable = [
     'name'
    ];

     public function skills(){

    	return $this->hasMany(Skill::class);
    }
}
