<?php
// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Specify the table name (optional as it defaults to plural form)
    public $timestamps = false;
    // The attributes that are mass assignable
    protected $fillable = ['name', 'detail', 'image_path'];
}


