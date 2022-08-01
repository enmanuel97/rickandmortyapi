<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('status', ['Alive', 'Dead', 'unknown'])->default('unknown');
            $table->enum('species', ['Human', 'Alien', 'unknown'])->default('unknown');
            $table->string('type');
            $table->enum('gender', ['Male', 'Female', 'unknown'])->default('unknown');
            $table->string('origin_id');
            $table->string('location_id');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
