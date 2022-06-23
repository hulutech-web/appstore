<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntegralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrals', function (Blueprint $table) {
            $table->id();
            $table->string('share_type')->default('分享类')->comment("分享类别");
            $table->bigInteger('share_time')->default(0)->comment("分享次数");
            $table->string('share_integral')->default(0)->comment("分享积分");

            $table->string('sign_type')->default('签到类')->comment("签到类别");
            $table->bigInteger('sign_time')->default(0)->comment("签到次数");
            $table->string('sign_integral')->default(0)->comment("签到积分");

            $table->string('invite_type')->default('邀请类')->comment("签到类别");
            $table->bigInteger('invite_time')->default(0)->comment("邀请次数");
            $table->string('invite_integral')->default(0)->comment("邀请类积分");

            $table->string('download_type')->default('下载类')->comment("下载类类别");
            $table->bigInteger('download_time')->default(0)->comment("下载类次数");
            $table->string('download_integral')->default(0)->comment("下载类积分");

            $table->string('integral_count')->default(0)->comment("总积分");

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
        Schema::dropIfExists('integrals');
    }
}
