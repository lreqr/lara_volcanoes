<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('volcanoes', function (Blueprint $table) {
            $table->id('volcano_id');//vnum
            $table->string('title');//volcano_name
            $table->text('description')->nullable();// boilerplate
            $table->float('latitude');
            $table->float('longitude');
            $table->integer('elevation_meters');
            $table->string('newest_notice_url');
            $table->string('volcano_url');
            $table->string('volcano_image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volcanoes');
    }
};
