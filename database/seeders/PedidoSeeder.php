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
            'mail_cliente' => "cliente1@gmail.com",
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('pedido')->insert([
            'mail_cliente' => "cliente2@gmail.com",
            'fecha' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
