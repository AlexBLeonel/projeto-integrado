<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesFieldToPaymentsTable extends Migration{

    public function up() {
        Schema::table('payments', function (Blueprint $table) {
            $table->string('notes')->default('Sem observações.');
        });
    }

    public function down() {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn('notes');
        });
    }
    
}
