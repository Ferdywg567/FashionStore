<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductidColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::table('categories_products', function (Blueprint $table) {
        //     $table->unsignedBigInteger('product_id');
    
        //     $table->foreign('product_id')->references('id')->on('products');
               
 
        // });

        Schema::table('products_transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
    
            $table->foreign('product_id')->references('id')->on('products');
               
 
        });

        // Schema::table('carts', function (Blueprint $table) {
        //     $table->unsignedBigInteger('product_id');
    
        //     $table->foreign('product_id')->references('id')->on('products');
               
 
        // });
       
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('categories_products', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');
      
          
        });

        Schema::table('products_transactions', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');
      
          
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropColumn('product_id');
      
          
        });
    }
}
