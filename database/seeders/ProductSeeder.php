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
            'name'=>'Kipling Art',
            'price'=> 1500000,
            'stock'=> 50,
            'size'=>'M',
            'description'=> 'Tas ini diproduksi pada tahun 2019 dengan berbagai macam pilihan warna',
            'image'=>'https://static.pxlecdn.com/photos/520471664/medium/0694090b74d23a2b57c8.jpg',
            // 'product_type_id'=> 7,
            'brand_id'=> 5,

        ]);

        DB::table('products')->insert([
            'name'=>'Staple Rib Sleeve Top',
            'price'=> 250000,
            'stock'=> 30,
            'size'=>'S',
            'description'=> 'Bahan terbuat dari 100% original',
            'image'=>'https://cottonon.com/on/demandware.static/-/Sites-catalog-master-women/default/dw7b3d6d92/2055723/2055723-01-2.jpg',
            // 'product_type_id'=> 1,
            'brand_id'=> 2,

        ]);

        DB::table('products')->insert([
            'name'=>'Draped Jersey Dress',
            'price'=> 299000,
            'stock'=> 50,
            'size'=>'All Size',
            'description'=> 'Produk ini merupakan pengeluaran pada season musim panas',
            'image'=>'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/3d023e1513a25ca5a4ec8d7f76a4459b256407ec_xxl-1.jpg',
            // 'product_type_id'=> 3,
            'brand_id'=> 1,

        ]);

        DB::table('products')->insert([
            'name'=>'Classic Jacket',
            'price'=> 599000,
            'stock'=> 20,
            'size'=>'All Size',
            'description'=> 'Produk ini merupakan new collection',
            'image'=>'https://dynamic.zacdn.com/DvHWBGWWo0USHFBELv2h0FrEYU0=/fit-in/346x500/filters:quality(90):fill(ffffff)/https://static-id.zacdn.com/p/mango-man-4541-8650193-7.jpg',
            // 'product_type_id'=> 4,
            'brand_id'=> 4,

        ]);

        DB::table('products')->insert([
            'name'=>'Casual Chunky Trainer Shoes',
            'price'=> 599000,
            'stock'=> 40,
            'size'=>'38',
            'description'=> 'Produk ini merupakan pengeluaran terbaru',
            'image'=>'https://static.pullandbear.net/2/photos/2023/V/1/2/p/2209/140/040/2209140040_1_1_3.jpg?t=1676995038806',
            // 'product_type_id'=> 8,
            'brand_id'=> 3,

        ]);

        
    }
}
