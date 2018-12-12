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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->unique()->index()->comment('用户ID');
            $table->string('name')->index()->comment('用户名称');
            $table->string('telephone')->unique()->comment('手机');
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('expired')->comment('失效日期，默认为空');
            $table->string('avatar')->comment('用户图片');
            $table->string('weixin_openid');
            $table->string('weixin_unionid');
            $table->integer('isvip')->comment('是否是vip会员，0：普通会员，1：vip会员');
            $table->integer('online_status')->comment('在线状态');
            $table->dateTime('last_actived_at')->comment('上次登录时间');
            $table->rememberToken();
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
