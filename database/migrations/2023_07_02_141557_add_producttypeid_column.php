<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProducttypeidColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('products', function (Blueprint $table) {
            // $table->unsignedBigInteger('product_type_id');
    
            // $table->foreign('product_type_id')->references('id')->on('product_types');
               
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('products', function (Blueprint $table) {
            // $table->dropForeign(['product_type_id']);
            // $table->dropColumn('product_type_id');
      
          
        });
    }
}
