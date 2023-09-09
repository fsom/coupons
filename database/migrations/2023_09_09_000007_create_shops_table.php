<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('region');
            $table->string('name')->nullable();
            $table->string('domain')->nullable();
            $table->string('url');
            $table->string('titel')->nullable();
            $table->string('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('offerspage')->nullable();
            $table->string('contactpage')->nullable();
            $table->string('imprint')->nullable();
            $table->string('adress')->nullable();
            $table->string('phone')->nullable();
            $table->string('icon')->nullable();
            $table->string('affiliate')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->boolean('active')->default(0)->nullable();
            $table->string('email')->nullable();
            $table->longText('internal_links')->nullable();
            $table->longText('external_links')->nullable();
            $table->string('header_redirect')->nullable();
            $table->string('ip')->nullable();
            $table->boolean('https')->default(0)->nullable();
            $table->integer('svol')->nullable();
            $table->string('keywords')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
