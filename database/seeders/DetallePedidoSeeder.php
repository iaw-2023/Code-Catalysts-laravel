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

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 2,
            'id_camiseta' => 17,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 3,
            'id_camiseta' => 3,
            'talle' => "L",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('detalle_pedido')->insert([
            'id_pedido' => 4,
            'id_camiseta' => 4,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 4,
            'id_camiseta' => 4,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 5,
            'id_camiseta' => 14,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 6,
            'id_camiseta' => 33,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 6,
            'id_camiseta' => 50,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 7,
            'id_camiseta' => 12,
            'talle' => "S",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 8,
            'id_camiseta' => 42,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 8,
            'id_camiseta' => 8,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 8,
            'id_camiseta' => 53,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 9,
            'id_camiseta' => 22,
            'talle' => "L",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 9,
            'id_camiseta' => 32,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 9,
            'id_camiseta' => 42,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 10,
            'id_camiseta' => 39,
            'talle' => "L",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 11,
            'id_camiseta' => 19,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 11,
            'id_camiseta' => 54,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 12,
            'id_camiseta' => 31,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 11,
            'id_camiseta' => 19,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 11,
            'id_camiseta' => 29,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 12,
            'id_camiseta' => 34,
            'talle' => "S",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 13,
            'id_camiseta' => 33,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 13,
            'id_camiseta' => 38,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 13,
            'id_camiseta' => 24,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 14,
            'id_camiseta' => 11,
            'talle' => "S",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 14,
            'id_camiseta' => 5,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 14,
            'id_camiseta' => 27,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 15,
            'id_camiseta' => 37,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 16,
            'id_camiseta' => 48,
            'talle' => "X",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 16,
            'id_camiseta' => 28,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 17,
            'id_camiseta' => 8,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 17,
            'id_camiseta' => 62,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 17,
            'id_camiseta' => 60,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 17,
            'id_camiseta' => 58,
            'talle' => "XL",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 18,
            'id_camiseta' => 53,
            'talle' => "L",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 18,
            'id_camiseta' => 28,
            'talle' => "L",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 19,
            'id_camiseta' => 52,
            'talle' => "M",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('detalle_pedido')->insert([
            'id_pedido' => 20,
            'id_camiseta' => 14,
            'talle' => "L",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
