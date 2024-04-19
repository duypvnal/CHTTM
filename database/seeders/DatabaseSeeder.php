<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminsSeeder::class,
            JobPositionsSeeder::class,
            SkillsSeeder::class,
            UserSeeder::class,
            CategoriesSeeder::class,
            CompanySeeder::class,
            CurrentJobSeeder::class,
        ]);
    }
}
