<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_payment_delivery', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendore_user_id',255);
            $table->string('productName',3);
            $table->string('productGenericName',255);
            $table->string('productDescription',200);
            $table->string('productKeyword',255);
            $table->string('partNumber',255);
            $table->string('menufacturer',200);
            $table->string('modelNumber',200);
            $table->string('vendor',200);
            $table->string('supplyType',200);
            $table->string('productCategory',200);
            $table->string('productSubCategory',200);
            $table->string('color',200);
            $table->string('accessories',100);
            $table->string('keySpecification',200);
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
