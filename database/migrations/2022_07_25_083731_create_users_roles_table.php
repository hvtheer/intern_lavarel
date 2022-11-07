<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('roles_id');
            $table->primary(['user_id', 'roles_id']);

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('roles_id')
                ->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users_roles');
    }
};
