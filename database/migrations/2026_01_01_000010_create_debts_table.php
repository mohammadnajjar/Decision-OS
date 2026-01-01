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
        Schema::create('debts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('account_id')->nullable()->constrained()->nullOnDelete();

            // نوع الدين: payable (علي دفعه) أو receivable (مستحق لي)
            $table->enum('type', ['payable', 'receivable']);

            // الطرف الآخر
            $table->string('party_name'); // اسم الشخص/الجهة
            $table->string('party_contact')->nullable(); // رقم تواصل

            // تفاصيل المبلغ
            $table->decimal('total_amount', 15, 2); // المبلغ الكلي
            $table->decimal('paid_amount', 15, 2)->default(0); // المبلغ المدفوع
            $table->decimal('remaining_amount', 15, 2); // المبلغ المتبقي

            // التواريخ
            $table->date('start_date'); // تاريخ بداية الدين
            $table->date('due_date')->nullable(); // تاريخ الاستحقاق النهائي

            // حالة الدين
            $table->enum('status', ['active', 'partially_paid', 'fully_paid', 'overdue'])->default('active');

            // تفاصيل إضافية
            $table->string('currency', 10)->default('AED');
            $table->decimal('interest_rate', 5, 2)->default(0); // نسبة الفائدة (إن وجدت)
            $table->text('notes')->nullable();
            $table->string('reference_number')->nullable(); // رقم مرجعي

            // جدول الدفع
            $table->enum('repayment_frequency', ['one_time', 'weekly', 'biweekly', 'monthly', 'quarterly', 'yearly'])->default('one_time');
            $table->integer('installments_count')->default(1); // عدد الأقساط

            $table->timestamps();

            // Indexes
            $table->index(['user_id', 'type']);
            $table->index(['user_id', 'status']);
            $table->index('due_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debts');
    }
};
