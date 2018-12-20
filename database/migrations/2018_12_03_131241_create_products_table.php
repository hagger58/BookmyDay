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
            $table->string('title');
<<<<<<< HEAD
            $table->string('slug')->unique();   //ingevoegd ivm shoppingcart
=======
            $table->string('slug')->nullable();
>>>>>>> 073d9a6395cfdb7a32d6e83e5432707bdc4e3ffd
            $table->string('ISBN');
            $table->string('image')->nullable();
            $table->text('abstract');
            $table->integer('category_id')->unsigned();
            $table->integer('subcategory_id')->unsigned();
            $table->integer('publisher_id')->nullable()->unsigned();
            $table->integer('price', 10, 2)->unsigned();
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
