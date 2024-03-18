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
        Schema::create('child_weight_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('age')->nullable();
            $table->string('age_category')->nullable();
            $table->float('weightKg')->nullable(); // يمكن أن يكون الوزن قيمة افتراضية لا توجد
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_weight_stats');
    }
};
