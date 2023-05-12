<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;//AGREGARLO EN CADA SEEDER CREADO
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

const CANT_CLIENTES = 25;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        for ($i = 1; $i <= CANT_CLIENTES; $i++) {
            DB::table('cliente')->insert([
                'email' => "cliente" . $i . "@gmail.com",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
