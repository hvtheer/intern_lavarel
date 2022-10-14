<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name', 255)->unique();
            $table->string('key', 255)->unique();
            $table->integer('permission_group_id');
            $table->foreign('permission_group_id')
                ->references('id')->on('permission_groups')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('permissions');
    }
};
