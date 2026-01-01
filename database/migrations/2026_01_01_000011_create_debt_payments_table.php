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
        Schema::create('debt_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('debt_id')->constrained()->cascadeOnDelete();
            $table->foreignId('account_id')->nullable()->constrained()->nullOnDelete();

            // تفاصيل الدفعة
            $table->decimal('amount', 15, 2); // مبلغ الدفعة
            $table->date('payment_date'); // تاريخ الدفع الفعلي
            $table->date('due_date')->nullable(); // تاريخ الاستحقاق المخطط

            // الحالة
            $table->enum('status', ['pending', 'paid', 'overdue', 'skipped'])->default('pending');

            // تفاصيل إضافية
            $table->string('payment_method')->nullable(); // طريقة الدفع
            $table->text('notes')->nullable();
            $table->string('reference_number')->nullable();

            $table->timestamps();

            // Indexes
            $table->index('debt_id');
            $table->index('payment_date');
            $table->index(['debt_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debt_payments');
    }
};
