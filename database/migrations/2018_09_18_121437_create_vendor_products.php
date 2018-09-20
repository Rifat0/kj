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
        Schema::create('vendor_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vendore_user_id',255);
            $table->string('product_number',255);
            $table->string('product_status',10)->default('0');
            $table->string('productName',255);
            $table->string('productGenericName',255);
            $table->string('productDescription',255);
            $table->string('productKeyword',255)->nullable();
            $table->string('partNumber',255)->nullable();
            $table->string('menufacturer',255)->nullable();
            $table->string('modelNumber',255)->nullable();
            $table->string('supplyType',255)->nullable();
            $table->string('productCategory',255);
            $table->string('productSubCategory',255);
            $table->string('color',255)->nullable();
            $table->string('accessories',255)->nullable();
            $table->longText('keySpecification');
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
