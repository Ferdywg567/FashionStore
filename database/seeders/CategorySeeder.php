<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'New Arrivals',
        ]);
        DB::table('categories')->insert([
            'name' => 'Deals',
        ]);
        DB::table('categories')->insert([
            'name' => 'Clothes',
        ]);
        DB::table('categories')->insert([
            'name' => 'Cosmetics',
        ]);
        DB::table('categories')->insert([
            'name' => 'Casual',
        ]);

        DB::table('categories')->insert([
            'name' => 'Colorful',
        ]);

        DB::table('categories')->insert([
            'name' => 'Vintage',
        ]);

        DB::table('categories')->insert([
            'name' => 'Formal',
        ]);

        DB::table('categories')->insert([
            'name' => 'Retro',
        ]);

        DB::table('categories')->insert([
            'name' => 'Hand Bag',
        ]);

        DB::table('categories')->insert([
            'name' => 'Shoulder Bag',
        ]);


    }
}
