<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIetsBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iets_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('filename')->nullable();
            $table->string('mime')->nullable();
            $table->string('original_filename')->nullable();
            $table->string('limg')->nullable();
            $table->string('type');
            $table->string('question');
            $table->string('i')->nullable();
            $table->string('ii')->nullable();
            $table->string('iii')->nullable();
            $table->string('iv')->nullable();
            $table->string('a');
            $table->string('b');
            $table->string('c')->nullable();
            $table->string('d')->nullable();
            $table->string('correct');
            // $table->string('related')->nullable();
            $table->string('level');
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
        Schema::dropIfExists('iets_banks');
    }
}
