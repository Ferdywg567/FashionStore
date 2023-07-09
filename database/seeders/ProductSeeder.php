<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\ProductType;
use App\Models\Brand;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
  

        DB::table('products')->insert([
            'name'        => 'Kipling Art',
            'price'       => 1500000,
            'stock'       => 50,
            'size'        => 'M',
            'description' => 'Tas ini diproduksi pada tahun 2019 dengan berbagai macam pilihan warna',
            'images'      => '["products/kipling_art.jpg"]',
            // 'product_type_id'=> 7,
            'brand_id'=> 5,

        ]);

        DB::table('products')->insert([
            'name'        => 'Staple Rib Sleeve Top',
            'price'       => 250000,
            'stock'       => 30,
            'size'        => 'S',
            'description' => 'Bahan terbuat dari 100% original',
            'images'      => '["products/sleeve_top.jpg"]',
            // 'product_type_id'=> 1,
            'brand_id'=> 2,

        ]);

        DB::table('products')->insert([
            'name'        => 'Draped Jersey Dress',
            'price'       => 299000,
            'stock'       => 50,
            'size'        => 'All Size',
            'description' => 'Produk ini merupakan pengeluaran pada season musim panas',
            'images'      => '["products/dress.jpg"]',
            // 'product_type_id'=> 3,
            'brand_id'=> 1,

        ]);

        DB::table('products')->insert([
            'name'        => 'Classic Jacket',
            'price'       => 599000,
            'stock'       => 20,
            'size'        => 'All Size',
            'description' => 'Produk ini merupakan new collection',
            'images'      => '["products/jacket.jpg"]',
            // 'product_type_id'=> 4,
            'brand_id'=> 4,

        ]);

        DB::table('products')->insert([
            'name'        => 'Casual Chunky Trainer Shoes',
            'price'       => 599000,
            'stock'       => 40,
            'size'        => '38',
            'description' => 'Produk ini merupakan pengeluaran terbaru',
            'images'      => '["products/shoes.jpg"]',
            // 'product_type_id'=> 8,
            'brand_id'=> 3,

        ]);

        
    }
}
