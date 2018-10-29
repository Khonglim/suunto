<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealer', function (Blueprint $table) {
            $table->increments('id');
            $table->char('category')->nullable();
            $table->char('province')->nullable();
            $table->char('bts')->nullable();
            $table->char('bts_search')->nullable();
            $table->char('mrt')->nullable();
            $table->char('mrt_search')->nullable();
            $table->char('shopping_mall')->nullable();
            $table->char('shopping_mall_search')->nullable();
            $table->char('road')->nullable();
            $table->char('store_name')->nullable();
            $table->text('address')->nullable();
            $table->char('store_hours')->nullable();
            $table->char('facebook')->nullable();
            $table->char('contact_number')->nullable();
            $table->text('map')->nullable();
            $table->text('directions')->nullable();
            $table->char('picture_1')->nullable();
            $table->char('status')->default('T');
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
        Schema::dropIfExists('dealer');
    }
}
