<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateCommentMetasTable.
 */
class CreateCommentMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('comment_id');
            $table->string('meta_key', 255)->comment('关键字');
            $table->text('meta_value')->nullable()->default('')->comment('值');
            $table->unique(['comment_id', 'meta_key']);
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
        Schema::dropIfExists('comment_metas');
    }
}
