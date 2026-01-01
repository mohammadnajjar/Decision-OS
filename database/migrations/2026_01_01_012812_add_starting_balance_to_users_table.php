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
        Schema::table('users', function (Blueprint $table) {
            $table->decimal('starting_balance', 12, 2)->default(0)->after('profile');
            $table->date('starting_balance_date')->nullable()->after('starting_balance');
            $table->string('currency', 10)->default('USD')->after('starting_balance_date');
            $table->boolean('onboarding_completed')->default(false)->after('currency');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['starting_balance', 'starting_balance_date', 'currency', 'onboarding_completed']);
        });
    }
};
