<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    public $table ='categories'; //which table we refer
    protected $fillable=[

        'category','description' //refer to content in Table days in SQLYOG
    ];
    //

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

