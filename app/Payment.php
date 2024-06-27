<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $table ='payments'; //which table we refer
    protected $fillable=[

        'payment_type','amount' //refer to content in Table days in SQLYOG
    ];
    public $timestamps = false;
}
