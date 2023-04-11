<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;//AGREGARLO EN CADA SEEDER CREADO
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedido')->insert([
            'id_cliente' => 1,
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 4,
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('pedido')->insert([
            'id_cliente' => 3,
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 7,
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
