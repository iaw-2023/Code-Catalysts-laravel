<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;//AGREGARLO EN CADA SEEDER CREADO
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'password' => Hash::make("clienteN" . $i ),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
