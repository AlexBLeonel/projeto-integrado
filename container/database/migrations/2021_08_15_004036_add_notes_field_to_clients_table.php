<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesFieldToClientsTable extends Migration
{
    public function up() {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('notes')->default('Sem observações.');
        });
    }

    public function down() {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('notes');
        });
    }
}
