<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateL1ModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l1_models', function (Blueprint $table) {
            $table->id();
            $table->integer('annee');
            $table->string('groupe');
            $table->boolean('status')->default(1)->nullable();
            $table->foreignId('candidat_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('l1_models');
    }
}
