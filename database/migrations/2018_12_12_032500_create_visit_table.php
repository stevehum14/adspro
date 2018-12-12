<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->comment('账号ID');
            $table->string('ip')->comment('访问ip');
            $table->string('area')->comment('地区');
            $table->string('key_words')->index()->comment('关键词');
            $table->string('links')->comment('访问链接');
            $table->enum('action',['点击','复制'])->comment('用户动作');
            $table->integer('search_engine')->comment('搜索引擎,1:百度，2：搜狗，3：360，4：神马，5：搜搜，6：谷歌 ');
            $table->string('source')->comment('页面来源');
            $table->enum('device',['pc','ios','android','other'])->index()->comment('设备');
            $table->string('browser')->comment('浏览器');
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
        Schema::dropIfExists('visit');
    }
}
