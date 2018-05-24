<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateTermMetasTable.
 */
class CreateTermMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('term_id');
            $table->string('meta_key', 255)->comment('关键字');
            $table->text('meta_value')->nullable()->default('')->comment('值');
            $table->unique(['term_id', 'meta_key']);
            $table->timestamps();

            $table->foreign('term_id')->references('id')->on('terms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_metas');
    }
}
