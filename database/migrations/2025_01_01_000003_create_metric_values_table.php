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
        Schema::create('metric_values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('metric_id')->constrained()->onDelete('cascade');
            $table->decimal('value', 10, 2);
            $table->date('date');
            $table->text('notes')->nullable();
            $table->timestamps();

            // Ensure one value per metric per user per day
            $table->unique(['user_id', 'metric_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metric_values');
    }
};
