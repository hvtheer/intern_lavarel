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
        Schema::create('schools', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('name')->unique();
            $table->string('code')->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('type', 10)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('hotline')->nullable();
            $table->string('province_code')->nullable();
            $table->string('institution_code')->nullable();
            $table->tinyInteger('main_branch')->nullable();
            $table->integer('zip_code')->nullable();
            $table->timestamp('attribute_information_setting_date');
            $table->string('old_school_investigation_number');
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('fax_number')->nullable();
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
        Schema::dropIfExists('schools');
    }
};
