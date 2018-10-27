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
			$table->string('productKey', 10);
			$table->string('nameProduct', 300);
			$table->string('nameProductEN', 300);
			$table->integer('typeProductId');
			$table->bigInteger('price');
			$table->integer('percentSalePrice');
			$table->string('pathProduct');
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
