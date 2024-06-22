<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table ='bookings'; //which table we refer
    protected $fillable=[

        'user_id','product_id','location_id','category_id','time_to','time_from' //refer to content in Table days in SQLYOG
    ];

}
