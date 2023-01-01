<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsConsumptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients_consumptions', function (Blueprint $table) {
            $table->id();
            $table->foreign('product_id');
            $table->foreign('ingredient_id');
            $table->foreign('order_id');
            $table->integer("consumption")->comment(("in grams"));
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
        Schema::dropIfExists('ingredients_consumptions');
    }
}
