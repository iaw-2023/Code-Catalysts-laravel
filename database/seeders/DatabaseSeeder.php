<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClienteSeeder::class,
            LigaSeeder::class,
            PedidoSeeder::class,
            EquipoSeeder::class,
            CamisetaSeeder::class,
            DetallePedidoSeeder::class,
        ]);
    }
}
