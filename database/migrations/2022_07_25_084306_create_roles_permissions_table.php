<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration 
{
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
            $table->integer('permission_id');
            $table->bigInteger('role_id');
            $table->primary(['permission_id', 'role_id']);
            $table->foreign('permission_id')
                ->references('id')->on('permissions')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
};
