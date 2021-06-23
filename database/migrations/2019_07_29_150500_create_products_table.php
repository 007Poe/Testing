<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->string('name');
            $table->string('product_code');
            $table->string('model');
            $table->string('color');            
            $table->string('size');
            $table->double('price');
            $table->text('specification');
            $table->text('image');
            $table->text('description');
            $table->text('service');
            $table->integer('qty')->unsigned();
            $table->integer('sale_qty')->unsigned();
            $table->string('status');
            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;
            // $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
