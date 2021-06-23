<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $fillable = [
     'type',
     'image',
     'description'
    ];

	public function services(){

		return $this->hasMany(Service::class);
	}

	public function serviceTypeGallery(){

		return $this->hasMany(ServiceTypeGallery::class);
	}
}
