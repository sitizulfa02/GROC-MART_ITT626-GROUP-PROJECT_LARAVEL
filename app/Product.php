<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table ='products'; //which table we refer
    protected $fillable=[

        'product_type','description','price','quantity','category' //refer to content in Table days in SQLYOG
    ];

    public function bookings()
{
    return $this->hasMany(Booking::class);
}

public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
