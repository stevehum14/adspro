<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_answer', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['版本更新','功能意见','其他'])->comment('类型');
            $table->string('content')->comment('内容');
            $table->string('user_id')->comment('用户ID');
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
        Schema::dropIfExists('question_answer');
    }
}
