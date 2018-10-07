<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_data', function (Blueprint $table) {
            $table->increments('order_data_id');
            $table->string('order_id',100);
            $table->string('web_user_id',100);
            $table->string('status',10)->default('0');
            $table->string('country',100);
            $table->string('city',100);
            $table->string('zip_postal',100);
            $table->string('address',100);
            $table->string('shipping_country',100)->nullable();
            $table->string('shipping_city',100)->nullable();
            $table->string('shipping_zip_postal',50)->nullable();
            $table->string('shipping_address',255)->nullable();
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
        Schema::dropIfExists('order_data');
    }
}
