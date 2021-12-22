<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryCount = max((int)$this->command->ask('How many category would you like?', 20), 1);
        Category::factory()->state([
            'name' => 'Technology',
            'slug' => 'technology',
         ])->create();
        Category::factory()->count($categoryCount)->create();
    }
}
