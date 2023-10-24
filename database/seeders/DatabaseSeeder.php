<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Norma;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)
            ->has(Norma::factory()->count(2))
            ->create();

        User::factory()
            ->has(Norma::factory()->count(5))
            ->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

        // $this->call([
        //     NormaSeeder::class,
        // ]);
    }
}
