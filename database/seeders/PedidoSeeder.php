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
            'id_cliente' => 11,
            'fecha' => '2023-05-10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 4,
            'fecha' => '2023-05-10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('pedido')->insert([
            'id_cliente' => 23,
            'fecha' => '2023-05-10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 7,
            'fecha' => '2023-05-11',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 12,
            'fecha' => '2023-05-11',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 24,
            'fecha' => '2023-05-11',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 8,
            'fecha' => '2023-05-11',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 19,
            'fecha' => '2023-05-11',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 2,
            'fecha' => '2023-05-12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 23,
            'fecha' => '2023-05-12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 1,
            'fecha' => '2023-05-12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 19,
            'fecha' => '2023-05-12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 2,
            'fecha' => '2023-05-13',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 4,
            'fecha' => '2023-05-13',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 20,
            'fecha' => '2023-05-13',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 10,
            'fecha' => '2023-05-13',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 13,
            'fecha' => '2023-05-14',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 25,
            'fecha' => '2023-05-14',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 17,
            'fecha' => '2023-05-14',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'id_cliente' => 12,
            'fecha' => '2023-05-14',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
