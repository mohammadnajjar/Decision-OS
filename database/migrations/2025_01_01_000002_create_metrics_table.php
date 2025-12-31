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
        Schema::create('metrics', function (Blueprint $table) {
            $table->id();
            $table->string('name');                           // "Gym Days"
            $table->string('key')->unique();                  // "gym_days"
            $table->string('module');                         // "life_discipline", "financial_safety", etc.
            $table->string('data_type')->default('integer');  // "integer", "decimal", "boolean"
            $table->json('config')->nullable();               // {"min": 0, "max": 7, "target": 3}
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metrics');
    }
};
