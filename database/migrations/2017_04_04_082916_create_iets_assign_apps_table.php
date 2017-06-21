<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIetsAssignAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iets_assign_apps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->nullable();
            $table->string('applicantname')->nullable();
            $table->string('IC')->nullable();
            $table->string('applicantid')->nullable();
            $table->string('upload')->nullable();
            $table->string('panel')->nullable();
            $table->date('softdate')->nullable();
            $table->date('harddate')->nullable();
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
        Schema::dropIfExists('iets_assign_apps');
    }
}
