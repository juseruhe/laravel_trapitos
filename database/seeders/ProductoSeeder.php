<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre_producto' => 'Chaqueta Militar blanco',
            'imagen' => 'ok',
            'talla_id' => 's',
            'color' => 'Blanco con manchado negro a gotas',
            'material' => '1',
            'categoria_id' => 'Chaquetas',
            'clasificacion_id' => 'Unisex',
            'valor' => '$ 150.000',
            'cantidad' => '101'
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => 'Chaqueta Antifluido negra',
            'imagen' => 'ok',
            'talla_id' => '1',
            'color' => 'Negro',
            'material' => 'Licra con antifluido',
            'categoria_id' => 'Chaquetas',
            'clasificacion_id' => 'Unisex',
            'valor' => '$ 150.000',
            'cantidad' => '101'
        ]);
    }
}
