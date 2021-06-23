<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
     'name'
    ];

    public function staffs()
    {
    	return $this->hasMany(Staff::class);
    }
}
