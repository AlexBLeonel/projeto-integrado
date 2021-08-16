<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration {
    public function up() {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->date('checkin');
            $table->date('checkout');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign('bookings_client_id_foreign');
            $table->dropForeign('bookings_room_id_foreign');
        });
        Schema::dropIfExists('bookings');
    }
}
