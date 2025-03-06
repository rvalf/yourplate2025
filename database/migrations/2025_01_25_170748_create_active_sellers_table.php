<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_sellers', function (Blueprint $table) {
            $table->uuid('act_id')->primary();
            $table->string('act_image');
            $table->integer('act_approval');
            $table->string(column: 'act_usr_id_seller');
            $table->timestamps();

            $table->foreign('act_usr_id_seller')->references('usr_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('active_sellers');
    }
};
