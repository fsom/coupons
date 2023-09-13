<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('space');
            $table->longText('soucecode')->nullable();
            $table->integer('views')->nullable();
            $table->integer('clicks')->nullable();
            $table->decimal('cpc', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
