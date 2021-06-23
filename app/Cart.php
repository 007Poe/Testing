<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items;
    public $totalQty=0;
    public $totalPrice=0;
    public $tax=0;
    public $status=true;

    public function __construct($oldCart)
    {
    	if($oldCart){
    		$this->items = $oldCart->items;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
            $this->tax = $oldCart->tax;
    	}
    }

    public function addToCart($item,$id,$qty,$addQty=1)
    {
        $addItem = ['qty'=>0,'price'=>$item->price,'item'=>$item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $addItem = $this->items[$id];
            }
        }
        if (($addItem['qty']+$addQty) < $qty) {
            $addItem['qty']+=$addQty;
            $this->totalQty+=$addQty;
            $addItem['price'] = $item->price;
            $this->items[$id] = $addItem;
            $this->totalPrice+=($addItem['price']*$addQty);
            $this->tax=$this->totalPrice*0.05;
            $this->status = true;
        }else{
            $this->status = false;
        }

    }
}
