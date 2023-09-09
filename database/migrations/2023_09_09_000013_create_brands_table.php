<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->longText('content')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
