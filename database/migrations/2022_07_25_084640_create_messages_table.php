<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration 
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('room', 255)->nullable();
            $table->bigInteger('sender_id')->nullable();
            $table->string('sender_type', 255)->default();
            $table->bigInteger('receiver_id')->unsigned();
            $table->string('receiver_type', 255);
            $table->text('content', 255);
            $table->string('content_type', 255)->default('text');
            $table->integer('association_id')->unsigned()->nullable();
            $table->string('association_type', 255);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('sender_id')
            ->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
