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
<<<<<<< HEAD
            $table->string('vendore_user_id',255);
            $table->string('productImage',255);
=======
            $table->string('vendore_user_id',20);
            $table->string('product_number',40);
            $table->string('productImage1',20)->nullable();
            $table->string('productImage2',20)->nullable();
            $table->string('productImage3',20)->nullable();
            $table->string('productImage4',20)->nullable();
            $table->string('productImage5',20)->nullable();
>>>>>>> 40c6a31b5ead0d6e363124b0dbea6166b49af97d
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
