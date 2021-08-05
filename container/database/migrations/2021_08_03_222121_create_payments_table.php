<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration {
    public function up() {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->boolean('status');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('booking_id');
            $table->foreign('booking_id')->references('id')->on('bookings');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign('payments_client_id_foreign');
            $table->dropForeign('payments_booking_id_foreign');
        });
        Schema::dropIfExists('payments');
    }
}
