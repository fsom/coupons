<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOffersTable extends Migration
{
    public function up()
    {
        Schema::table('offers', function (Blueprint $table) {
            $table->unsignedBigInteger('shop_id')->nullable();
            $table->foreign('shop_id', 'shop_fk_8979949')->references('id')->on('shops');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->foreign('brand_id', 'brand_fk_8979956')->references('id')->on('brands');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id', 'product_fk_8979957')->references('id')->on('products');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id', 'category_fk_8979958')->references('id')->on('categories');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->foreign('created_by_id', 'created_by_fk_8979963')->references('id')->on('users');
        });
    }
}
