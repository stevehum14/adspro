<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyVisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_visit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->index()->comment('账户id');
            $table->date('daily')->index()->comment('日期');
            $table->integer('pv')->comment('页面访问浏览量');
            $table->integer('uv')->comment('独立IP访问量');
            $table->integer('copy_pv')->comment('复制总数');
            $table->integer('copy_uv')->comment('独立地址复制总数');
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
        Schema::dropIfExists('daily_visit');
    }
}
