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
            $table->string('smallOrdersAccepted',3);
            $table->string('minimumOrderQuantity',255);
            $table->string('unitOfMeasure',200);
            $table->string('pd_price',255);
            $table->string('pd_priceForOptional',255);
            $table->string('instantPrice',200);
            $table->string('fifteenDaysPrice',200);
            $table->string('thirteenDaysPrice',200);
            $table->string('dpu_w_p_length',200);
            $table->string('dpu_w_p_width',200);
            $table->string('dpu_w_p_height',200);
            $table->string('dpu_w_p_weight',200);
            $table->string('dpu_w_p_volume',100);
            $table->string('p_d_p_u_length',200);
            $table->string('p_d_p_u_width',200);
            $table->string('p_d_p_u_height',200);
            $table->string('weightPerPack',200);
            $table->string('exportCartonDimension',200);
            $table->string('exportCartonWeight',200);
            $table->string('DeliveryWithinState',100);
            $table->string('DeliveryWithinGR',200);
            $table->string('DeliveryOutsideGR',200);
            $table->string('DurationDeliveryWithinState',200);
            $table->string('DurationDeliveryWithinGR',200);
            $table->string('DurationDeliveryOutsideGR',200);
            $table->string('paymentMethod',100);
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
