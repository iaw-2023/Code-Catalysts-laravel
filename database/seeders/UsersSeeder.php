<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        DB::table('users')->insert([
            'nombre' => "Administrador",
            'apellido' => "IAW",
            'email' => "admin@iaw.com",
            'password' => Hash::make("admin123"),
            'rol' => "administrador",
            'created_at' => now(),
            'updated_at' => now(), 
        ]);

        DB::table('users')->insert([
            'nombre' => "Juan",
            'apellido' => "Sánchez",
            'email' => "juan@iaw.com",
            'password' => Hash::make("juan123"),
            'rol' => "empleado",
            'created_at' => now(),
            'updated_at' => now(), 
        ]);

        DB::table('users')->insert([
            'nombre' => "Genaro",
            'apellido' => "García",
            'email' => "genaro@iaw.com",
            'password' => Hash::make("genaro123"),
            'rol' => "empleado",
            'created_at' => now(),
            'updated_at' => now(), 
        ]);

    }
}
