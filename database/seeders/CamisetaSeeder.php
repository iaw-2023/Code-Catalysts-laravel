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
        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 River Plate Titular",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/42f6e0d4f39047e8b476aee60109bc4c_9366/Camiseta_Titular_River_Plate_22-23_Blanco_GB7592_01_laydown.jpg",
            'id_equipo' => 1,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 River Plate Suplente",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/f2121f4fe9534691a1c7af01014b1edb_9366/Camiseta_Alternativa_River_Plate_22-23_Rojo_GB7588_01_laydown.jpg",
            'id_equipo' => 1,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Boca Juniors Titular",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/4fcfb797d457430eaccaaec200dafeb7_9366/Camiseta_Titular_Boca_Juniors_22-23_Azul_HE6323_01_laydown.jpg",
            'id_equipo' => 2,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Boca Juniors Suplente",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d94fbf4a70884a228009af01016426f0_9366/Camiseta_Alternativa_Boca_Juniors_22-23_Blanco_IB9458_01_laydown.jpg",
            'id_equipo' => 2,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Independiente Titular",
            'precio' => 19999,
            'talles' => "S M X XL",
            'imagen' => "https://www.diablosoy.com/ccstore/v1/images/?source=/file/v8766860614183822823/products/camiseta%20CAI.png",
            'id_equipo' => 3,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Independiente Suplente",
            'precio' => 19999,
            'talles' => "S M X XL",
            'imagen' => "https://www.diablosoy.com/ccstore/v1/images/?source=/file/v8119319890536143959/products/771567%2001_1.png",
            'id_equipo' => 3,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Racing Club Titular",
            'precio' => 23999,
            'talles' => "S M X XL",
            'imagen' => "https://kappaarg.vtexassets.com/arquivos/ids/213354-800-auto?v=638140886244070000",
            'id_equipo' => 4,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Racing Club Suplente",
            'precio' => 23999,
            'talles' => "S M X XL",
            'imagen' => "https://kappaarg.vtexassets.com/arquivos/ids/213386-800-auto?v=638140886685970000",
            'id_equipo' => 4,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 San Lorenzo Titular",
            'precio' => 19999,
            'talles' => "S M X XL",
            'imagen' => "https://www.soycuervo.com/ccstore/v1/images/?source=/file/v6106389445411585539/products/CAMISETA%20CASLA%202023%20BRUBANK.jpg",
            'id_equipo' => 5,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 San Lorenzo Suplente",
            'precio' => 19999,
            'talles' => "S M X XL",
            'imagen' => "https://www.soycuervo.com/ccstore/v1/images/?source=/file/v4164183528857031988/products/9891_100_1.jpg",
            'id_equipo' => 5,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Manchester United Titular",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dw8703cd18/products/AD_H13881/AD_H13881-1.JPG",
            'id_equipo' => 6,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Manchester United Suplente",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a000441619d743449629ad2b0068f9da_9366/Camiseta_Visitante_Manchester_United_21-22_Blanco_GM4621_22_model.jpg",
            'id_equipo' => 6,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Manchester City Titular",
            'precio' => 30000,
            'talles' => "S M X XL",
            'imagen' => "https://images.puma.com/image/upload/f_auto,q_auto,b_rgb:fafafa,w_706,h_706/global/759202/01/fnd/ARG",
            'id_equipo' => 7,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Manchester City Suplente",
            'precio' => 30000,
            'talles' => "S M X XL",
            'imagen' => "https://www.dexter.com.ar/on/demandware.static/-/Sites-365-dabra-catalog/default/dwbb2076da/products/PU765722-02/PU765722-02-1.JPG",
            'id_equipo' => 7,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Liverpool Titular",
            'precio' => 18999,
            'talles' => "S M X XL",
            'imagen' => "https://sporting.vtexassets.com/arquivos/ids/578020-800-800?v=637941104082000000",
            'id_equipo' => 8,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Liverpool Suplente",
            'precio' => 21899,
            'talles' => "S M X XL",
            'imagen' => "https://sporting.vtexassets.com/arquivos/ids/476106-800-800?v=637811433369970000",
            'id_equipo' => 8,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Chelsea Titular",
            'precio' => 30000,
            'talles' => "S M X XL",
            'imagen' => "https://cdn.shopify.com/s/files/1/0567/6639/8509/products/chelmuj_493x.jpg",
            'id_equipo' => 9,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Chelsea Suplente",
            'precio' => 30000,
            'talles' => "S M X XL",
            'imagen' => "https://cdn.shopify.com/s/files/1/0567/6639/8509/products/aaachelseater_493x.jpg",
            'id_equipo' => 9,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Arsenal Titular",
            'precio' => 25999,
            'talles' => "S M X XL",
            'imagen' => "https://mezzalacamisetas.com.ar/wp-content/uploads/2022/09/descarga.jfif",
            'id_equipo' => 10,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Arsenal Suplente",
            'precio' => 25999,
            'talles' => "S M X XL",
            'imagen' => "https://mezzalacamisetas.com.ar/wp-content/uploads/2022/09/descarga-2.jpg",
            'id_equipo' => 10,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Tottenham Titular",
            'precio' => 23999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/tottenham-home-2022-23-62a083909de73.jpg",
            'id_equipo' => 11,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Tottenham Suplente",
            'precio' => 22999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/2022-2023-thfc-away.jpg",
            'id_equipo' => 11,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Real Madrid Titular",
            'precio' => 30000,
            'talles' => "S M X XL",
            'imagen' => "https://cdn.shopify.com/s/files/1/0448/3609/4115/products/HF0291-RMCFMZ0074-02_500x480.jpg",
            'id_equipo' => 12,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Barcelona Titular",
            'precio' => 30000,
            'talles' => "S M X XL",
            'imagen' => "https://static.nike.com/a/images/f_auto/dpr_1.3,cs_srgb/w_706,c_limit/4d13f622-7534-49e4-87bc-db0c60a97582/fc-barcelona-2022-23.png",
            'id_equipo' => 13,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Atletico Madrid Titular",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/5da6f1fe-301b-4d78-8829-66b7766d9e04/jersey-de-f%C3%BAtbol-dri-fit-del-club-atl%C3%A9tico-de-madrid-local-2022-23-stadium-6HZBVz.png",
            'id_equipo' => 14,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Valencia Titular",
            'precio' => 20000,
            'talles' => "S M X XL",
            'imagen' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7zRvLjKg0W1QKEgjTarSVQozbPPOTRdujIA&usqp=CAU",
            'id_equipo' => 15,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Villarreal Titular",
            'precio' => 22999,
            'talles' => "S M X XL",
            'imagen' => "https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61PSlGIEzIL._AC_UY1000_.jpg",
            'id_equipo' => 16,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Milan Titular",
            'precio' => 29999,
            'talles' => "S M X XL",
            'imagen' => "https://pbs.twimg.com/media/FplxMpCWcAUkG6N?format=jpg&name=small",
            'id_equipo' => 17,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Inter Titular",
            'precio' => 25999,
            'talles' => "S M X XL",
            'imagen' => "https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/8bac8815-c726-4fd6-b680-ab67744278a5/inter-milan-2022-23-match-home-dri-fit-adv-football-jersey-fK3lnD.png",
            'id_equipo' => 18,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Juventus Titular",
            'precio' => 20999,
            'talles' => "S M X XL",
            'imagen' => "https://newsport.vteximg.com.br/arquivos/ids/14145628-455-588/H38907-A.jpg",
            'id_equipo' => 19,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Napoli Titular",
            'precio' => 20999,
            'talles' => "S M X XL",
            'imagen' => "https://http2.mlstatic.com/D_NQ_NP_891379-MLA53378025606_012023-W.jpg",
            'id_equipo' => 20,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Roma Titular",
            'precio' => 17999,
            'talles' => "S M X XL",
            'imagen' => "https://http2.mlstatic.com/D_NQ_NP_949473-MLA53184143066_012023-O.jpg",
            'id_equipo' => 21,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Paris Saint Germain Titular",
            'precio' => 31999,
            'talles' => "S M X XL",
            'imagen' => "https://cdn.dsmcdn.com/mnresize/400/-/ty486/product/media/images/20220723/1/148341586/526749194/1/1_org.jpg",
            'id_equipo' => 22,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Olympique Marsella Titular",
            'precio' => 30999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/2022-2023-om-home.jpg",
            'id_equipo' => 23,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Monaco Titular",
            'precio' => 19999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/as-monaco-home-2019-2020.jpg",
            'id_equipo' => 24,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Olympique Lyon Titular",
            'precio' => 18999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/2022-2023-ol-fourth.jpg",
            'id_equipo' => 25,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Niza Titular",
            'precio' => 19999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/2022-2023-nice-home.jpg",
            'id_equipo' => 26,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Bayern Munich Titular",
            'precio' => 30999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/bayern-home-2022-2023.jpg",
            'id_equipo' => 27,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Borussia Dortmund Titular",
            'precio' => 25999,
            'talles' => "S M X XL",
            'imagen' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIVdWSlOMGMm8MYnWQYb-expwW8oVyHKr8hg&usqp=CAU",
            'id_equipo' => 28,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Borussia Monchengladbach Titular",
            'precio' => 21999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/2022-2023-bmg-home.jpg",
            'id_equipo' => 29,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Eintracht Frankfurt Titular",
            'precio' => 20999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/2022-2023-eintracht-third.jpg",
            'id_equipo' => 30,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camiseta')->insert([
            'descripcion' => "2022/23 Bayer Leverkusen Titular",
            'precio' => 18999,
            'talles' => "S M X XL",
            'imagen' => "https://assets-es.imgfoot.com/media/cache/800x800/2022-2023-b04-home.jpg",
            'id_equipo' => 31,
            'estado' => "Habilitado",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}