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
        Schema::create('users', function (Blueprint $table) {
            $table->string('usr_id')->primary();
            $table->string('usr_email')->unique();
            $table->string('usr_password');
            $table->string('usr_fullname')->nullable();
            $table->string('usr_address')->nullable();
            $table->string('usr_dorm')->nullable();
            $table->string('usr_phone')->nullable();
            $table->string('usr_role');
            $table->string('usr_seller_confirmed')->nullable();
            
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
