<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $fillable = [
    'id','product_name','product_price'
    ];
    public $timestamps = true;
}
