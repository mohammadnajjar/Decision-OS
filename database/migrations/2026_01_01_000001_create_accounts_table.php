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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name'); // اسم الحساب: "بنك الإمارات"، "كاش محفظة"، إلخ
            $table->enum('type', ['bank', 'cash', 'ewallet'])->default('cash'); // نوع الحساب
            $table->decimal('balance', 15, 2)->default(0); // الرصيد الحالي
            $table->string('currency', 5)->default('AED'); // العملة
            $table->string('icon')->nullable(); // أيقونة اختيارية
            $table->string('color')->nullable(); // لون مميز للحساب
            $table->boolean('is_default')->default(false); // هل هو الحساب الافتراضي
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
