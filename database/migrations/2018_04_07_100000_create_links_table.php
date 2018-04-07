<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateLinksTable.
 */
class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url', 255)->index()->default('')->comment('链接URL');
            $table->string('name', 255)->default('')->comment('链接标题');
            $table->string('image', 255)->default('')->comment('链接图片');
            $table->string('target', 25)->default('')->comment('链接打开方式');
            $table->string('description', 255)->default('')->comment('链接描述');
            $table->boolean('visible')->default(false)->comment('链接是否可见');
            $table->integer('owner')->default(1)->comment('添加者用户id');
            $table->integer('rating')->default(0)->comment('评分等级');
            $table->string('rel')->default('');
            $table->text('notes')->comment('注释');
            $table->string('rss', 255)->default('')->comment('链接RSS地址');
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
        Schema::dropIfExists('links');
    }
}
