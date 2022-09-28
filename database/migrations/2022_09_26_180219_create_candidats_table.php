<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('serie');
            $table->string('nationalite');
            $table->string('situationFamiliale');
            $table->bigInteger('contact')->nullable();
            $table->integer('nombreEnfant')->default(0);
            $table->string('adresse');
            $table->bigInteger('tel1')->nullable();
            $table->bigInteger('tel2')->nullable();
            $table->bigInteger('tel3')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('dateDeNaissance');
            $table->string('lieuDeNaissance');
            $table->string('postule');
            $table->string('genre', 1);
            $table->boolean('concours')->nullable();
            $table->boolean('entretien')->nullable();
            $table->boolean('status')->nullable();
            $table->integer('anneeCandidature')->nullable();
            $table->string('matricule')->nullable();
            $table->string('nomPere')->nullable();
            $table->string('nomMere')->nullable();
            $table->string('nomTuteur')->nullable();
            $table->string('professionPere')->nullable();
            $table->string('professionMere')->nullable();
            $table->string('professionTuteur')->nullable();
            $table->string('telPere')->nullable();
            $table->string('telMere')->nullable();
            $table->string('telTuteur')->nullable();
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
        Schema::dropIfExists('candidats');
    }
}
