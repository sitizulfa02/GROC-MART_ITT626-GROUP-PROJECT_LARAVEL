<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table ='bookings'; //which table we refer
    protected $fillable=[

        'user_id','user','product_id','location_id','category_id','product_quantity' //refer to content in Table days in SQLYOG
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // Add relationship with User if 'user' field is related to User model
    // Example assuming 'user' field represents a user_id foreign key
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
