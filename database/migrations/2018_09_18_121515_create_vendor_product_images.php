<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorProductImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_product_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendore_user_id',255);
            $table->string('product_number',255);
            $table->string('productImage1',20);
            $table->string('productImage2',20);
            $table->string('productImage3',20);
            $table->string('productImage4',20);
            $table->string('productImage5',20);
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
