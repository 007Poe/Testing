<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
     'name'
    ];

    public function  products()
    {
    	return $this->hasMany(Product::class);    	
    }

    public function  subcategories()
    {
        return $this->hasMany(SubCategory::class);      
    }

    public function  catProducts()
    {

    	return $this->products()->get()->groupBy('name');
    	
    }
}
