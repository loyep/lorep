<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateTermPostTables.
 */
class CreateTermPostTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_posts', function (Blueprint $table) {
            $table->integer('post_id');
            $table->integer('term_id')->default(0);
            $table->integer('term_order')->default(0);
            $table->timestamps();
            $table->primary(['post_id', 'term_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_posts');
    }
}
