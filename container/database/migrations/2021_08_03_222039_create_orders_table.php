<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->boolean('status');
            $table->string('note', 250);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('orders_product_id_foreign');
            $table->dropForeign('orders_room_id_foreign');
        });
        Schema::dropIfExists('orders');
    }
}
