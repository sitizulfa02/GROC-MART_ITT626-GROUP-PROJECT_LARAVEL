<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public $table ='locations'; //which table we refer
    protected $fillable=[

        'store_name','address' //refer to content in Table days in SQLYOG
    ];

    public function bookings()
{
    return $this->hasMany(Booking::class);
}
}
