<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_user', function (Blueprint $table) {
            $table->increments('web_user_id');
            $table->string('web_user_status',60)->default('1');
            $table->string('company_name',60);
            $table->string('about_company',250);
            $table->string('company_description',200);
            $table->string('website_url',200);
            $table->string('cac_number',200);
            $table->string('type_of_business',200);
            $table->string('year_of_existence',200);
            $table->string('phone_of_MD_Chairman',200);
            $table->string('email_of_MD_Chairman',200);
            $table->string('phone_of_contact_person',200);
            $table->string('email_of_contact_person',200);
            $table->string('company_rating',200);
            $table->string('login_email',100)->unique();
            $table->string('password',200);
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
