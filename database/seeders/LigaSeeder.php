<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;//AGREGARLO EN CADA SEEDER CREADO
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $ligas = ["Liga Profesional de Fútbol", "Premier League", "LaLiga", "Serie A", "Ligue 1", "Bundesliga"];

        for ($i=0; $i<count($ligas); $i++) {
            DB::table('liga')->insert([
                'nombre' => $ligas[$i],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
