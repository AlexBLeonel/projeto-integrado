<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesFieldToLogsTable extends Migration {
    public function up() {
        Schema::table('logs', function (Blueprint $table) {
            $table->string('notes')->default('Sem observações.');
        });
    }

    public function down() {
        Schema::table('logs', function (Blueprint $table) {
            $table->dropColumn('notes');
        });
    }
}
