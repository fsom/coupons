<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('alias');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('headline');
            $table->longText('content');
            $table->string('category')->nullable();
            $table->string('tags')->nullable();
            $table->datetime('published_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
