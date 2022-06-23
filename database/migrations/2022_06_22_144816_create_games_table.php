<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('app_name')->comment('游戏名');
            $table->string('desc')->nullable()->comment('描述信息');
            $table->string('developer_name')->nullable()->comment('开发者名称');
            $table->string('download_url')->nullable()->comment('下载地址');
            $table->string("icon_url")->nullable()->comment('图标地址');
            $table->smallInteger("is_ios")->nullable()->comment('是否IOS');
            $table->datetime("modify_time")->nullable()->comment('修改时间');
            $table->string("package_name")->nullable()->comment('包名');
            $table->string("permission_classify")->nullable()->comment('权限分类');
            $table->string("permission_classify_url")->nullable()->comment('权限分类URL');
            $table->json("permissions")->nullable()->comment('权限');
            $table->string("pkg_id")->nullable()->comment('包ID');
            $table->string("policy_url")->nullable()->comment('策略URL');
            $table->string("size")->nullable()->comment('大小');
            $table->datetime("update_time")->nullable()->comment('更新时间');
            $table->string("version_name")->nullable()->comment('版本号');
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
        Schema::dropIfExists('games');
    }
}
