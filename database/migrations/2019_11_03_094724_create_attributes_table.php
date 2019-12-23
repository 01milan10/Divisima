<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributes', function (Blueprint $table) {
            $table->bigIncrements('product_SKU');
            $table->timestamps();
            $table->string('product_brand');
            $table->string('product_color');
            $table->string('product_price');
            $table->string('product_size');
            $table->string('product_rating');
            $table->string('product_description');
            $table->string('product_image');
            $table->string('available_quantity');
            $table->string('product_id');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
