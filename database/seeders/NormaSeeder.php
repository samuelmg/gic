<?php

namespace Database\Seeders;

use App\Models\Norma;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NormaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('normas')->insert([
        //     'nombre' => 'ISO',
        //     'referencia' => 'ISO Internacional',
        //     'tipo' => 'ISO',
        //     'user_id' => User::factory()->id,
        // ]);

        Norma::factory()->count(20)->create();
    }
}
