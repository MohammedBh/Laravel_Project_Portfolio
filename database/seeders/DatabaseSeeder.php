<?php

namespace Database\Seeders;

use App\Models\Index;
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
        $this->call([
            AboutSeeder::class,
            ContactSeeder::class,
            FactsSeeder::class,
            HeroSeeder::class,
            NavbarSeeder::class,
            PortfolioDynSeeder::class,
            PortfolioSeeder::class,
            ServicesDynSeeder::class,
            ServicesSeeder::class,
            SkillsDynSeeder::class,
            SkillsSeeder::class
        ]);
    }
}
