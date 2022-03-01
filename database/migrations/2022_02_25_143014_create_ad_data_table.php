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
            $table->longText('video_url')->nullable();
            $table->tinyInteger('duration')->default(0);
            $table->integer('create_time')->nullable();
            $table->string('app_name')->nullable();
            $table->longText('app_url')->nullable();
            $table->string('root_path')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('app_image')->nullable();
            $table->longText('app_title')->nullable();
            $table->longText('url')->nullable();
            $table->longText('cover')->nullable();
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
