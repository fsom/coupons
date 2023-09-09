<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('coupon_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('coupon_id');
            $table->foreign('coupon_id', 'coupon_id_fk_8979310')->references('id')->on('coupons')->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_8979310')->references('id')->on('tags')->onDelete('cascade');
        });
    }
}
