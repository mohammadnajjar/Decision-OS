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
        Schema::create('quran_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('year');
            $table->integer('month'); // 1-12
            $table->integer('target_pages')->default(604); // القرآن كاملاً
            $table->integer('completed_pages')->default(0);
            $table->integer('current_juz')->default(1); // الجزء الحالي 1-30
            $table->integer('current_surah')->nullable(); // السورة الحالية
            $table->integer('current_page')->default(1); // الصفحة الحالية
            $table->date('last_read_date')->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', ['not_started', 'in_progress', 'completed'])->default('not_started');
            $table->timestamps();

            $table->unique(['user_id', 'year', 'month']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quran_progress');
    }
};
