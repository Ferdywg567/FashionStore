<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categories(){
            $this->belongsToMany(Category::class, 'categories_products','category_id', 'product_id');
    }

    public function product_types()
    {

        return $this->belongsTo(ProductType::class,'product_type_id');

    }

    public function brands()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }
}
