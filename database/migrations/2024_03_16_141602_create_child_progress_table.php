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
        Schema::create('child_progress', function (Blueprint $table) {
            $table->id();
            $table->string('month')->nullable();
            // الاستلقاء البطني 
            $table->string('abdominal_recumbency')->nullable();
            // الاستلقاء الظهري 
            $table->string('dorsal_recumbency')->nullable();
            //  التطور البصري 
            $table->string('visual_development')->nullable();
            // الاجتماعي
            $table->string('social')->nullable();
            // الجلوس
            $table->string('sitting')->nullable();
            // الوقوف
            $table->string('stand_up')->nullable();
            // التكيف
            $table->string('adaptation')->nullable();
            // الحركة
            $table->string('movement')->nullable();
            // اللغة
            $table->string('language')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('child_progress');
    }
};
