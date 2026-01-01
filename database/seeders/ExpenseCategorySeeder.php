<?php

namespace Database\Seeders;

use App\Models\ExpenseCategory;
use Illuminate\Database\Seeder;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Seed the default expense categories.
     */
    public function run(): void
    {
        $categories = ExpenseCategory::getDefaultCategories();

        foreach ($categories as $category) {
            ExpenseCategory::updateOrCreate(
                ['name' => $category['name'], 'user_id' => null],
                array_merge($category, [
                    'is_default' => true,
                    'is_system' => $category['is_system'] ?? false,
                ])
            );
        }
    }
}
