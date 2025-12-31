<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * جدول سجل القرارات - Decision Log
     */
    public function up(): void
    {
        Schema::create('decisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->enum('context', ['financial', 'work', 'client', 'personal', 'business'])->default('work');
            $table->text('reason')->nullable(); // السبب
            $table->text('expected_outcome')->nullable(); // النتيجة المتوقعة
            $table->date('review_date')->nullable(); // تاريخ المراجعة
            $table->text('actual_outcome')->nullable(); // النتيجة الفعلية
            $table->enum('result', ['pending', 'win', 'lose'])->default('pending');
            $table->text('lessons_learned')->nullable(); // الدروس المستفادة
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decisions');
    }
};
