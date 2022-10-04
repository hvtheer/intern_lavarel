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
        Schema::create('attachments', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary();
            $table->string('uuid', 36)->nullable();
            $table->string('attachable_type', 255)->nullable();
            $table->bigInteger('attachacble_id', 20)->unsigned()->nullable();
            $table->string('file_path', 255)->default('');
            $table->string('extension', 255)->default('');
            $table->string('fielname', 255)->default('');
            $table->string('mime_type', 255)->default('');
            $table->integer('size')->unsigned()->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachments');
    }
};
