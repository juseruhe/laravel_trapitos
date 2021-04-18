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
            'talla_id' => '1',
            'color' => 'Blanco con manchado negro a gotas',
            'material' => 'antifluido',
            'categoria_id' => '1',
            'clasificacion_id' => '3',
            'valor' => '$ 150.000',
            'cantidad' => '101'
        ]);
        DB::table('productos')->insert([
            'nombre_producto' => 'Chaqueta Antifluido negra',
            'imagen' => 'ok',
            'talla_id' => '2',
            'color' => 'Negro',
            'material' => 'Licra con antifluido',
            'categoria_id' => '2',
            'clasificacion_id' => '3',
            'valor' => '$ 150.000',
            'cantidad' => '101'
        ]);
    }
}
