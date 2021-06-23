<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
     'category_id',
     'sub_category_id',
     'name',
     'product_code',
     'model',
     'color',
     'size',
     'price',
     'image',
     'description',
     'service',
     'qty',     
     'sale_qty',
     'specification',
     'status'
    ];

    public static function relate(){
    	return Product::all();
    }

    public static function category($id){
    	return Product::where('category_id', $id)->paginate(6);
    }

    public function maincategory()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'sub_category_id');
    }

    public function validateWishList($ip,$id)
	{
		 $count = WishList::where([['ip',$ip],['product_id',$id]])->count();
		 return $count;
	}
}
