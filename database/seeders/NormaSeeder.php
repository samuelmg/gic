<?php

namespace Database\Seeders;

use App\Models\Norma;
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
        // $norma = new Norma();
        // $norma->nombre = fdsafads
        // $norma->save();

        // DB::table('normas')->insert([
        //     'nombre' => 'ISO 9001:2015',
        //     'referencia' => 'ISO',
        //     'tipo' => 'ISO',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        Norma::factory()->count(5)->create();
    }
}
