<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_user', function (Blueprint $table) {
            $table->increments('admin_user_id');
            $table->string('admin_user_status',60)->default('1');
            $table->string('admin_user_role',60)->default('1');
            $table->string('admin_user_name',60);
            $table->string('admin_user_email',100)->unique();
            $table->string('admin_user_password',100);
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
