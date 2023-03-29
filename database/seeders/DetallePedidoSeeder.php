<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;//AGREGARLO EN CADA SEEDER CREADO
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetallePedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_pedido')->insert([
            'id_pedido' => 1,
            'id_camiseta' => 1,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 1,
            'id_camiseta' => 2,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
