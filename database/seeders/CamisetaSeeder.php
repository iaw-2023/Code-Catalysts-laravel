<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;//AGREGARLO EN CADA SEEDER CREADO
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CamisetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 River Plate Titular",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/42f6e0d4f39047e8b476aee60109bc4c_9366/Camiseta_Titular_River_Plate_22-23_Blanco_GB7592_01_laydown.jpg",
            'id_equipo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 River Plate Suplente",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f2121f4fe9534691a1c7af01014b1edb_9366/Camiseta_Alternativa_River_Plate_22-23_Rojo_GB7588_01_laydown.jpg",
            'id_equipo' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
