<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_data', function (Blueprint $table) {
            $table->id();
            $table->string('ad_id')->unique();
            $table->integer('play_count')->default(0);
            $table->integer('share_count')->default(0);
            $table->integer('digg_count')->default(0);
            $table->longText('video_url');
            $table->tinyInteger('duration')->default(0);
            $table->integer('create_time');
            $table->string('app_name');
            $table->longText('app_url');
            $table->string('root_path');
            $table->longText('desc');
            $table->integer('genre_id')->nullable();
            $table->string('genre')->nullable();
            $table->integer('dest_id')->nullable();
            $table->string('dest')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('ad_data');
    }
}
