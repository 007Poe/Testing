<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
     'name'
    ];
    
    public function staffs()
	{
		return $this->hasMany(Staff::class);
	}
}
