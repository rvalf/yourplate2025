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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('prd_id')->primary();
            $table->string('prd_name');
            $table->integer('prd_type');
            $table->string('prd_desc');
            $table->string('prd_image');
            $table->datetime('prd_closed_po')->nullable();
            $table->decimal('prd_price', 15, 2);
            $table->string('prd_usr_id_seller');
            $table->timestamps();

            $table->foreign('prd_usr_id_seller')->references('usr_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
