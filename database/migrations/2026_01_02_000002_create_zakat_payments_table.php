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
        Schema::create('zakat_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 15, 2);
            $table->date('payment_date');
            $table->string('hijri_year', 10)->nullable()->comment('السنة الهجرية');
            $table->decimal('zakatable_assets_at_payment', 15, 2)->nullable()->comment('الأصول الزكوية وقت الدفع');
            $table->string('recipient')->nullable()->comment('الجهة المستلمة');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index(['user_id', 'payment_date']);
            $table->index(['user_id', 'hijri_year']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zakat_payments');
    }
};
