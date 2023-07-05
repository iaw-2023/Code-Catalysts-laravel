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
        $imagePath = public_path('img/river1.avif');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 River Plate Titular",
            'precio' => 21999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 1,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/river2.avif');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 River Plate Suplente",
            'precio' => 21999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 1,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/boca1.avif');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Boca Juniors Titular",
            'precio' => 21999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 2,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/boca2.avif');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Boca Juniors Suplente",
            'precio' => 21999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 2,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/independiente1.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Independiente Titular",
            'precio' => 19999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 3,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/independiente2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Independiente Suplente",
            'precio' => 19999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 3,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/racing1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Racing Club Titular",
            'precio' => 23999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 4,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/racing2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Racing Club Suplente",
            'precio' => 23999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 4,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/sanlorenzo1.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 San Lorenzo Titular",
            'precio' => 19999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 5,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/sanlorenzo2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 San Lorenzo Suplente",
            'precio' => 19999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 5,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/united1.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Manchester United Titular",
            'precio' => 21999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 6,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/united2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Manchester United Suplente",
            'precio' => 21999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 6,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/city1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Manchester City Titular",
            'precio' => 30000,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 7,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/city2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Manchester City Suplente",
            'precio' => 30000,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 7,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/liverpool1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Liverpool Titular",
            'precio' => 18999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 8,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/liverpool2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Liverpool Suplente",
            'precio' => 21899,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 8,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/chelsea1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Chelsea Titular",
            'precio' => 30000,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 9,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/chelsea2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Chelsea Suplente",
            'precio' => 30000,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 9,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/arsenal1.jfif');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Arsenal Titular",
            'precio' => 25999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 10,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/arsenal2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Arsenal Suplente",
            'precio' => 25999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 10,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/tottenham1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Tottenham Titular",
            'precio' => 23999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 11,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/tottenham2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Tottenham Suplente",
            'precio' => 22999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 11,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/realmadrid1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Real Madrid Titular",
            'precio' => 30000,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 12,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/realmadrid2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Real Madrid Suplente",
            'precio' => 21710,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 12,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/barcelona1.jfif');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Barcelona Titular",
            'precio' => 30000,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 13,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/barcelona2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Barcelona Suplente",
            'precio' => 17680,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 13,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/atleticomadrid1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Atletico Madrid Titular",
            'precio' => 21999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 14,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/atleticomadrid2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Atletico Madrid Suplente",
            'precio' => 26500,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 14,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/valencia1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Valencia Titular",
            'precio' => 20000,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 15,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/valencia2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Valencia Suplente",
            'precio' => 18000,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 15,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/villarreal1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Villarreal Titular",
            'precio' => 22999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 16,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/villarreal2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Villarreal Suplente",
            'precio' => 20999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 16,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/milan1.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Milan Titular",
            'precio' => 29999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 17,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/milan2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Milan Suplente",
            'precio' => 25999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 17,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/inter1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Inter Titular",
            'precio' => 25999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 18,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/inter2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Inter Suplente",
            'precio' => 22999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 18,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/juventus1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Juventus Titular",
            'precio' => 20999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 19,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/juventus2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Juventus Suplente",
            'precio' => 22999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 19,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/napoli1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Napoli Titular",
            'precio' => 20999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 20,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/napoli2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Napoli Suplente",
            'precio' => 18999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 20,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/roma1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Roma Titular",
            'precio' => 17999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 21,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/roma2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Roma Suplente",
            'precio' => 17500,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 21,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/psg1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Paris Saint Germain Titular",
            'precio' => 31999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 22,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/psg2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Paris Saint Germain Suplente",
            'precio' => 30999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 22,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/marsella1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Olympique Marsella Titular",
            'precio' => 30999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 23,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/marsella2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Olympique Marsella Suplente",
            'precio' => 28999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 23,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/monaco1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Monaco Titular",
            'precio' => 19999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 24,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/monaco2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Monaco Suplente",
            'precio' => 15999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 24,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/lyon1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Olympique Lyon Titular",
            'precio' => 18999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 25,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/lyon2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Olympique Lyon Suplente",
            'precio' => 17999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 25,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/niza1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Niza Titular",
            'precio' => 19999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 26,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/niza2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Niza Suplente",
            'precio' => 16999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 26,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/bayern1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Bayern Munich Titular",
            'precio' => 30999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 27,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/bayern2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Bayern Munich Suplente",
            'precio' => 28999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 27,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/dortmund1.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Borussia Dortmund Titular",
            'precio' => 25999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 28,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/dortmund2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Borussia Dortmund Suplente",
            'precio' => 23999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 28,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/monchengladbach1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Borussia Monchengladbach Titular",
            'precio' => 21999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 29,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/monchengladbach2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Borussia Monchengladbach Suplente",
            'precio' => 18999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 29,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/frankfurt1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Eintracht Frankfurt Titular",
            'precio' => 20999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 30,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/frankfurt2.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Eintracht Frankfurt Suplente",
            'precio' => 17999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 30,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/leverkusen1.webp');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Bayer Leverkusen Titular",
            'precio' => 18999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 31,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $imagePath = public_path('img/leverkusen2.jpg');
        $imageData = file_get_contents($imagePath);
        $image = base64_encode($imageData);
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Bayer Leverkusen Suplente",
            'precio' => 17999,
            'talles' => "S M L X XL",
            'imagen' => $image,
            'id_equipo' => 31,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}