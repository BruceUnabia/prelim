<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchandisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name', 100);
            $table->string('brand_name', 100);
            $table->decimal('retail_price', 10,2);
            $table->decimal('wholesale_price', 10,2);
            $table->integer('wholesale_qty');
            $table->integer('qty_stock');
            $table->bigInteger('unit_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->timestamps();
            
            //foreign key
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchandises');
    }
}
