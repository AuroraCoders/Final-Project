<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();  // auto-incrementing primary key
            $table->string('name');  // product name
            $table->text('detail')->nullable();  // optional product detail
            $table->string('image_path')->nullable();  // image file path
           
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
