<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * جدول العملاء - Client Health System
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->decimal('total_revenue', 12, 2)->default(0);
            $table->integer('late_payments')->default(0); // عدد التأخيرات
            $table->tinyInteger('effort_score')->default(3); // 1-5 (1=سهل, 5=صعب)
            $table->tinyInteger('communication_score')->default(3); // 1-5
            $table->enum('status', ['green', 'yellow', 'red'])->default('green');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
