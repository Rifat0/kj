<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorPaymentDelivery extends Migration
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
            $table->string('product_number',255);
            $table->string('smallOrdersAccepted',3);
            $table->string('minimumOrderQuantity',255)->nullable();
            $table->string('unitOfMeasure',255)->nullable();
            $table->string('pd_priceForOptional',255)->nullable();
            $table->string('instantPrice',255)->nullable();
            $table->string('fifteenDaysPrice',255)->nullable();
            $table->string('thirteenDaysPrice',255)->nullable();
            $table->string('dpu_w_p_length',255)->nullable();
            $table->string('dpu_w_p_width',255)->nullable();
            $table->string('dpu_w_p_height',255)->nullable();
            $table->string('dpu_w_p_weight',255)->nullable();
            $table->string('dpu_w_p_volume',255)->nullable();
            $table->string('p_d_p_u_length',255)->nullable();
            $table->string('p_d_p_u_width',255)->nullable();
            $table->string('p_d_p_u_height',255)->nullable();
            $table->string('weightPerPack',255)->nullable();
            $table->string('exportCartonDimension',255)->nullable();
            $table->string('exportCartonWeight',255)->nullable();
            $table->string('DeliveryWithinState',255)->nullable();
            $table->string('DeliveryWithinGR',255)->nullable();
            $table->string('DeliveryOutsideGR',255)->nullable();
            $table->string('DurationDeliveryWithinState',255)->nullable();
            $table->string('DurationDeliveryWithinGR',255)->nullable();
            $table->string('DurationDeliveryOutsideGR',255)->nullable();
            $table->string('paymentMethod',255);
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