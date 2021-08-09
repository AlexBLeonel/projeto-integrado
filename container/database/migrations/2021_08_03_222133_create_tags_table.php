<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration {
    public function up() {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('type', 50);
            $table->string('description', 250);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down() {
        Schema::dropIfExists('tags');
    }
}
