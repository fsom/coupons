<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('code');
            $table->string('value');
            $table->date('until');
            $table->string('landingpage');
            $table->longText('rules')->nullable();
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
