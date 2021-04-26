<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colores')->insert([
           "color"=>"azul"
        ]);
        DB::table('colores')->insert([
            "color"=>"negro"
        ]);
        DB::table('colores')->insert([
            "color"=>"rojo"
        ]);
    }
}
