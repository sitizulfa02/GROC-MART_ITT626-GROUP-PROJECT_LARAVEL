<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table ='products'; //which table we refer
    protected $fillable=[

        'name','description','price','quantity','category' //refer to content in Table days in SQLYOG
    ];
}
