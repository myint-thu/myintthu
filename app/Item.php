<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
    	'codeno','name','photo','price',
    	'discount','description','subcategory_id','brand_id'

    ];
      public function subcategories($value=''){
    	return $this->belongsTo('App\Subcategory');
    }
     public function brands($value=''){
    	return $this->belongsTo('App\Brand');
    }
     public function orders($value=''){
        return $this->belongsToMany('App\Order','order_detail')
                    ->withPivot('qty')
                    ->withTimestamps();
    }
}
