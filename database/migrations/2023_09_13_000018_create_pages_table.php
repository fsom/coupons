<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alias')->unique();
            $table->string('headline');
            $table->longText('content');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('robots')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
