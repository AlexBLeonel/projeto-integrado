<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration {
    public function up() {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('description', 250);
            $table->integer('number');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('rooms');
    }
}
