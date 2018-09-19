<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendoreUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendore_user', function (Blueprint $table) {
            $table->increments('vendore_user_id');
            $table->string('vendore_user_status',10)->default('1');
            $table->string('name',60);
            $table->string('companyName',255)->nullable();
            $table->string('vendor_type',60);
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->string('address',255)->nullable();
            $table->string('fax',100)->nullable();
            $table->string('mobile',14)->nullable();
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
