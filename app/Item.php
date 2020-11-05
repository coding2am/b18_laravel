<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'codeno',
        'photo',
        'name',
        'price',
        'discount',
        'description',
    ];

    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function subcategory()
    {
        return $this->belongsTo('App\SubCategory');
    }

    public function orders()
    {
        return $this->belongsToMany('App\Orders','orderdetails')
                    ->withPivot('qty')
                    ->withTimestamps();
    }


}
