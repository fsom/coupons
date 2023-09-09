<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('stars');
            $table->string('ip')->nullable();
            $table->longText('data')->nullable();
            $table->longText('comment')->nullable();
            $table->longText('answer')->nullable();
            $table->datetime('answer_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
