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
        Schema::create('weekly_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->json('kpi_snapshot');              // Snapshot of all KPIs at review time
            $table->text('what_worked')->nullable();   // What worked this week
            $table->text('what_failed')->nullable();   // What failed this week
            $table->text('next_week_focus')->nullable(); // Focus for next week
            $table->date('week_start');                // Start of the week being reviewed
            $table->timestamps();

            // One review per user per week
            $table->unique(['user_id', 'week_start']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_reviews');
    }
};
