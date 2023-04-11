<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;//AGREGARLO EN CADA SEEDER CREADO
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id_ligas = array(
            "arg" => 1,
            "ing" => 2,
            "esp" => 3,
            "ita" => 4,
            "fra" => 5,
            "ale" => 6,
        );

        $equipos_arg = ["River Plate", "Boca Juniors", "Independiente", "Racing Club", "San Lorenzo"];
        for ($i=0; $i<count($equipos_arg); $i++) {
            DB::table('equipo')->insert([
                'nombre' => $equipos_arg[$i],
                'id_liga' => $id_ligas["arg"],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $equipos_ing = ["Manchester United", "Manchester City", "Liverpool", "Chelsea", "Arsenal", "Tottenham"];
        for ($i=0; $i<count($equipos_ing); $i++) {
            DB::table('equipo')->insert([
                'nombre' => $equipos_ing[$i],
                'id_liga' => $id_ligas["ing"],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $equipos_esp = ["Real Madrid", "Barcelona", "Atletico Madrid", "Valencia", "Villarreal"];
        for ($i=0; $i<count($equipos_esp); $i++) {
            DB::table('equipo')->insert([
                'nombre' => $equipos_esp[$i],
                'id_liga' => $id_ligas["esp"],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $equipos_ita = ["Milan", "Inter", "Juventus", "Napoli", "Roma"];
        for ($i=0; $i<count($equipos_ita); $i++) {
            DB::table('equipo')->insert([
                'nombre' => $equipos_ita[$i],
                'id_liga' => $id_ligas["ita"],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $equipos_fra = ["PSG", "Olympique Marsella", "Monaco", "Olympique Lyon", "Niza"];
        for ($i=0; $i<count($equipos_fra); $i++) {
            DB::table('equipo')->insert([
                'nombre' => $equipos_fra[$i],
                'id_liga' => $id_ligas["fra"],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $equipos_ale = ["Bayern Munich", "Borussia Dortmund", "Borussia Monchengladbach", "Eintracht Frankfurt", "Bayer Leverkusen"];
        for ($i=0; $i<count($equipos_ale); $i++) {
            DB::table('equipo')->insert([
                'nombre' => $equipos_ale[$i],
                'id_liga' => $id_ligas["ale"],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
