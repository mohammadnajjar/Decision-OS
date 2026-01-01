<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * جدول الأصول والأعمال - Business & Assets (مقفول بالبداية)
     */
    public function up(): void
    {
        Schema::create('business_assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Business Info
            $table->string('name');
            $table->enum('type', ['product', 'service', 'saas', 'content', 'other'])->default('service');
            $table->text('description')->nullable();

            // Financial Metrics
            $table->integer('active_clients')->default(0);
            $table->decimal('mrr', 12, 2)->default(0); // Monthly Recurring Revenue
            $table->integer('contracts_signed')->default(0);
            $table->integer('systems_deployed')->default(0);

            // Status
            $table->enum('status', ['active', 'paused', 'planning'])->default('planning');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_assets');
    }
};
