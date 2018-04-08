<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            // 学生名称
            $table->string('name');
            // 性别
            $table->string('sex');
            // 邮箱
            $table->string('email');
            // 喜爱的颜色
            $table->string('favorite_color');
            // 手机号
            $table->string('phone');
            // 地址
            $table->string('addr');
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
        Schema::dropIfExists('students');
    }
}
