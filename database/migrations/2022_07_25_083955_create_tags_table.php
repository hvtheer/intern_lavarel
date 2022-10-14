<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{

    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('name', 255)->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
    }
};
