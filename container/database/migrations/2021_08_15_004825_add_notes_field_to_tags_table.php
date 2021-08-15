<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesFieldToTagsTable extends Migration
{
    public function up() {
        Schema::table('tags', function (Blueprint $table) {
            $table->string('notes')->default('Sem observações.');
        });
    }

    public function down() {
        Schema::table('tags', function (Blueprint $table) {
            $table->dropColumn('notes');
        });
    }
}
