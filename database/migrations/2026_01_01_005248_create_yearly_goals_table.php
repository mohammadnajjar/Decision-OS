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
        Schema::create('yearly_goals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->year('year');
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('category', ['personal', 'financial', 'health', 'career', 'learning', 'relationships', 'other'])->default('personal');
            $table->enum('status', ['not_started', 'in_progress', 'completed', 'abandoned'])->default('not_started');
            $table->unsignedTinyInteger('progress')->default(0); // 0-100
            $table->unsignedTinyInteger('priority')->default(1); // 1-5
            $table->date('target_date')->nullable();
            $table->json('milestones')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yearly_goals');
    }
};
