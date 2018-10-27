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
            $table->increments('id_dealer');
            $table->char('category');
            $table->char('province');
            $table->char('bts')->default('no');
            $table->char('bts_search')->default('no');
            $table->char('mrt')->default('no');
            $table->char('mrt_search')->default('no');
            $table->char('shopping_mall');
            $table->char('shopping_mall_search')->default('no');
            $table->char('road')->default('no');
            $table->char('store_name');
            $table->text('address');
            $table->char('store_hours');
            $table->char('facebook');
            $table->char('contact_number');
            $table->text('map');
            $table->text('directions');
            $table->char('picture_1');
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
