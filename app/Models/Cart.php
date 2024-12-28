<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
     public $timestamps = false;

    // Allow mass assignment for these fields
    protected $fillable = [
        'product_name',
        'product_description',
        'product_price',
        'product_image',
    ];
}
