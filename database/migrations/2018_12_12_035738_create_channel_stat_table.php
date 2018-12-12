<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelStatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channel_stat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->index()->comment('账户ID');
            $table->date('daily')->index()->comment('日期');
            $table->integer('bd_pv');
            $table->integer('bd_uv');
            $table->integer('bd_copy_pv');
            $table->integer('bc_copy_uv');
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
        Schema::dropIfExists('channel_stat');
    }
}
