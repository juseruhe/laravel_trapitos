<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materiales')->insert([
            'Nombre' => 'Seda'
        ]);

        DB::table('materiales')->insert([
            'Nombre' => 'Lana'
        ]);

        DB::table('materiales')->insert([
            'Nombre' => 'Algodón'
        ]);

        DB::table('materiales')->insert([
            'Nombre' => 'Cuero'
        ]);
    }
}
