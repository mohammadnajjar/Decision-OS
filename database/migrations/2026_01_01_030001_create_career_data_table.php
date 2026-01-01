<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * جدول بيانات التطور المهني - Career / Work Growth
     */
    public function up(): void
    {
        Schema::create('career_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->date('date');

            // CV Status
            $table->enum('cv_status', ['draft', 'ready', 'sent'])->default('draft');

            // Applications
            $table->integer('applications_count')->default(0);

            // Interviews
            $table->integer('interviews_count')->default(0);

            // Skill Development Hours
            $table->decimal('skill_hours', 5, 2)->default(0);

            // Notes
            $table->text('notes')->nullable();

            $table->timestamps();

            // Unique constraint per user per date
            $table->unique(['user_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_data');
    }
};
