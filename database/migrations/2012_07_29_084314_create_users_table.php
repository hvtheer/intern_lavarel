<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 32);
            $table->string('username', 50)->nullable();
            $table->string('password', 200)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('address')->address()->nullable();
            $table->bigInteger('school_id')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->integer('parent_id')->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->boolean('closed')->nullable();
            $table->string('code')->unique()->nullable();
            $table->tinyInteger('social_type')->nullable();
            $table->string('social_id')->unique()->nullable();
            $table->string('social_name')->nullable();
            $table->string('social_nickname')->nullable();
            $table->string('social_avatar')->nullable();
            $table->text('description')->nullable();
            $table->foreign('school_id')
                ->references('id')->on('schools')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
