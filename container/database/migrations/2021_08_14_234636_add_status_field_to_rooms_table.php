<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusFieldToRoomsTable extends Migration {
    public function up() {
        Schema::table('rooms', function (Blueprint $table) {
            $table->boolean('status');
        });
    }

    public function down() {
        Schema::table('rooms', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}