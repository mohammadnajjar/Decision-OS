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
        Schema::table('expense_categories', function (Blueprint $table) {
            $table->boolean('is_investment')->default(false)->after('icon');
            $table->decimal('auto_percentage', 5, 2)->nullable()->after('is_investment')->comment('نسبة تلقائية من الدخل (مثلا 10%)');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expense_categories', function (Blueprint $table) {
            $table->dropColumn(['is_investment', 'auto_percentage']);
        });
    }
};
