<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration {
    public function up() {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::table('order_products', function (Blueprint $table) {
            $table->dropForeign('order_products_order_id_foreign');
            $table->dropForeign('order_products_product_id_foreign');
        });
        Schema::dropIfExists('order_products');
    }
}
