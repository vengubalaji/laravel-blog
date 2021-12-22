<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // User::factory()->superadmin()->create();
        // User::factory()->count(10)->create();

        if ($this->command->confirm('Do you want to refresh the database?')) {
            $this->command->call('migrate:refresh');
            $this->command->info('Database was refreshed');
        }

        $this->call([
            // UsersTableSeeder::class,
            // CategoriesTableSeeder::class,
            // PostsTableSeeder::class,
            // CommentsTableSeeder::class,
            // TagsTableSeeder::class,
            PostTagTableSeeder::class,
        ]);
        
    }
}
