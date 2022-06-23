<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalgamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localgames', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('名称');
            $table->string('script')->nullable()->comment('游戏名');
            $table->string('script_gold')->nullable()->comment('消息');
            $table->string("pkg")->unique()->comment('包名');
            $table->string('timeout_str')->nullable()->comment('超时时间');
            $table->string('url')->nullable()->comment("URL地址");
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
        Schema::dropIfExists('localgames');
    }
}
