<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('deal_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('deal_id');
            $table->foreign('deal_id', 'deal_id_fk_8979348')->references('id')->on('deals')->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_8979348')->references('id')->on('tags')->onDelete('cascade');
        });
    }
}
