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
        Schema::create('reviews', function (Blueprint $table) {
            $table->uuid('rvw_id')->primary();
            $table->integer('rvw_rate');
            $table->string('rvw_desc');
            $table->uuid('rvw_usr_id');
            $table->string('rvw_prd_id');
            $table->timestamps();

            $table->foreign('rvw_usr_id')->references('usr_id')->on('users');
            $table->foreign('rvw_prd_id')->references('prd_id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
