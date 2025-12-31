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
        Schema::create('pomodoro_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('task_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('duration')->default(1500);  // Duration in seconds (default 25 min)
            $table->enum('status', ['completed', 'interrupted'])->default('completed');
            $table->tinyInteger('energy_before')->nullable();  // 1-5 scale
            $table->tinyInteger('energy_after')->nullable();   // 1-5 scale
            $table->text('notes')->nullable();
            $table->timestamps();

            // Index for analytics
            $table->index(['user_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pomodoro_sessions');
    }
};
