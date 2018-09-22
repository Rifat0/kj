<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorySubCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_sub_category', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('category_sub_category_id');
            $table->string('category_id',20)->default('0');
            $table->string('category_image',100)->default('0');
            $table->string('category_name',100)->default('0');
            $table->string('category_description',250)->default('0');
            $table->string('category_abbreviation',250)->default('0');
            $table->string('sub_category_id',20)->default('0');
            $table->string('parent_category_id',20)->default('0');
            $table->string('parent_category_name',20)->default('0');
            $table->string('sub_category_name',100)->default('0');
            $table->string('sub_category_description',250)->default('0');
            $table->string('sub_category_abbreviation',250)->default('0');
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
        Schema::dropIfExists('category_sub_category');
    }
}
