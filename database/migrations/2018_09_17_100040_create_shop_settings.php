<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_settings', function (Blueprint $table) {
            $table->increments('shop_id');
            $table->string('shop_name',60);
            $table->string('shop_description',250);
            $table->string('facebook',200);
            $table->string('twitter',200);
            $table->string('pinterest',200);
            $table->string('instagram',200);
            $table->string('googlePlus',200);
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
        //
    }
}
