<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('space');
            $table->string('title');
            $table->string('description');
            $table->string('value');
            $table->date('until');
            $table->string('landingpage');
            $table->longText('rules')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
