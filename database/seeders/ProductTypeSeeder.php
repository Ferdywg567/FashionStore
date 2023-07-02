<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_types')->insert([
            'name' => 'Kaos',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Kemeja',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Gaun',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Jaket',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Celana',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Rok',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Tas',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Sepatu',
        ]);
        
        DB::table('product_types')->insert([
            'name' => 'Sendal',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Perhiasan',
        ]);

    
    }
}
