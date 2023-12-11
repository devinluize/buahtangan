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
        Schema::create('albums', function (Blueprint $table) {
            $table->id('album_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('plant_id');
            $table->foreign('user_id')->references('user_id')->on('tb_user');
            $table->foreign('plant_id')->references('id')->on('plants');
            $table->string('album_name');
            $table->string('path');
            $table->string('album_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
