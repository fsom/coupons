<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('offer_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('offer_id');
            $table->foreign('offer_id', 'offer_id_fk_8979959')->references('id')->on('offers')->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_8979959')->references('id')->on('tags')->onDelete('cascade');
        });
    }
}
