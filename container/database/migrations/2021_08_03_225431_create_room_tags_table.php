<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTagsTable extends Migration {
    public function up() {
        Schema::create('room_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('room_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::table('room_tags', function (Blueprint $table) {
            $table->dropForeign('room_tags_room_id_foreign');
            $table->dropForeign('room_tags_tag_id_foreign');
        });
        Schema::dropIfExists('room_tags');
    }
}
