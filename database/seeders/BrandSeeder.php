<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert([
            'name' => 'HnM',
        ]);

        DB::table('brands')->insert([
            'name' => 'Cotton On',
        ]);

        DB::table('brands')->insert([
            'name' => 'PnB',
        ]);

        DB::table('brands')->insert([
            'name' => 'Mango',
        ]);

        DB::table('brands')->insert([
            'name' => 'Kipling',
        ]);

        DB::table('brands')->insert([
            'name' => 'Zara',
        ]);
    }
}
