<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', [
                'Planet', 'Cluster', 
                'Dream', 
                'Fantasy town', 
                'Space station', 
                'Microverse', 
                'TV', 
                'Resort', 
                'unknown'
            ])->default('unknown');
            $table->enum('dimension', [
                'Dimension C-137', 
                'Dimension 5-126', 
                'Fantasy Dimension', 
                'Cronenberg Dimension', 
                'Replacement Dimension', 
                'unknown'
            ])->default('unknown');
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
        Schema::dropIfExists('locations');
    }
}
