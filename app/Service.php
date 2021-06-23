<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
		protected $fillable = [
     'name',
     'service_type_id',
     'image',
     'description'
    ];

	public function service_type()
	{
		return $this->belongsTo(ServiceType::class);
	}

    public static function services($id){
    	return Service::where('service_type_id', $id)->paginate(10);
    }

    public function serviceTypeGallery(){

		return $this->hasMany(ServiceTypeGallery::class);
	}

}
