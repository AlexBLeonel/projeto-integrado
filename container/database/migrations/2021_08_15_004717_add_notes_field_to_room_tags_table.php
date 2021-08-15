<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesFieldToRoomTagsTable extends Migration
{
    public function up() {
        Schema::table('room_tags', function (Blueprint $table) {
            $table->string('notes')->default('Sem observações.');
        });
    }

    public function down() {
        Schema::table('room_tags', function (Blueprint $table) {
            $table->dropColumn('notes');
        });
    }
}
