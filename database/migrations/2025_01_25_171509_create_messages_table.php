<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->uuid('msg_id')->primary();
            $table->string('msg_text');
            $table->uuid('msg_prd_id')->nullable();
            $table->foreign('msg_prd_id')->references('prd_id')->on('products');
            $table->uuid(column: 'msg_chat_id');
            $table->string(column: 'msg_usr_id_sender');
            $table->timestamps();

            $table->foreign('msg_chat_id')->references('chat_id')->on('chats');
            $table->foreign('msg_usr_id_sender')->references('usr_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
