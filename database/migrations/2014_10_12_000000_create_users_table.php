<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name');
//            $table->string('email')->unique();
//            $table->string('password');
//            $table->rememberToken();
//            $table->timestamps();
//        });
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name',100);
            $table->integer('pid');
            $table->string('pic',200);
            $table->timestamps();
        });
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('commonts_text');
            $table->integer('user_id');
            $table->integer('relat_user_id');
            $table->timestamps();
        });
        Schema::create('posts',function (Blueprint $table){
            $table->increments('id');
            $table->string('post_title',500);
            $table->string('post_desc',500);
            $table->integer('category_id');
            $table->text('post_content');
            $table->string('post_tags',500);
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
        Schema::dropIfExists('users');
    }
}
