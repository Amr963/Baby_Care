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
        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('image_path_vaccines')->nullable();
            $table->string('short_video_path_vaccines')->nullable();
            //Why is the vaccine taken?
            $table->longText('indication')->nullable();
            // The recommended age to take the vaccine?
            $table->date('recommended_age')->nullable();
            //Instructions or recommendations for the process of taking the vaccine?
            $table->longText('guidelines')->nullable();
            //The appropriate injection site for the vaccine?
            $table->string('injection_location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaccines');
    }
};