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
        Schema::create('zakat_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('enabled')->default(false);
            $table->date('hawl_start_date')->nullable()->comment('تاريخ بلوغ النصاب أول مرة');
            $table->decimal('nisab_gold_price', 10, 2)->nullable()->comment('سعر غرام الذهب');
            $table->date('gold_price_updated_at')->nullable()->comment('تاريخ آخر تحديث لسعر الذهب');
            $table->string('currency', 10)->default('SAR');
            $table->enum('calculation_method', ['hijri_year', 'gregorian_year'])->default('hijri_year');
            $table->boolean('include_receivable_debts')->default(false)->comment('هل تحسب الديون المستحقة لي');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->unique('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zakat_settings');
    }
};
