<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories_products')->insert([
            'type_id'    => 1,
            'product_id' => 1,

        ]);

        DB::table('categories_products')->insert([
            'type_id'    => 4,
            'product_id' => 1,

        ]);

        DB::table('categories_products')->insert([
            'type_id'    => 1,
            'product_id' => 2,

        ]);

        DB::table('categories_products')->insert([
            'type_id'    => 1,
            'product_id' => 3,

        ]);

        DB::table('categories_products')->insert([
            'type_id'=> 3,
            'product_id'=> 4,

        ]);

        DB::table('categories_products')->insert([
            'type_id'=> 5,
            'product_id'=> 4,

        ]);

        DB::table('categories_products')->insert([
            'type_id'=> 1,
            'product_id'=> 5,

        ]);

        DB::table('categories_products')->insert([
            'type_id'=> 3,
            'product_id'=> 5,

        ]);

        DB::table('categories_products')->insert([
            'type_id'=> 4,
            'product_id'=> 5,

        ]);
    }
}
