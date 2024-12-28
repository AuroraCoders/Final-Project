<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('carts', function (Blueprint $table) {
        $table->id();
        $table->string('product_name'); // Store the product name
        $table->text('product_description'); // Store the product description
        $table->decimal('product_price', 8, 2); // Store the product price with 2 decimal places
        $table->string('product_image');// Store the product image URL
    });
}

public function down()
{
    Schema::dropIfExists('carts');
}

};
