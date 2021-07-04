<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->integer('step');
            $table->string('etat')->default('en_cours');
            $table->string('session')->nullable();
            $table->string('formation')->nullable();
            $table->string('programme')->nullable();
            $table->string('prenom')->nullable();
            $table->string('nom')->nullable();
            $table->string('telephone')->nullable();
            $table->string('jour')->nullable();
            $table->string('mois')->nullable();
            $table->string('annee')->nullable();
            $table->string('sexe')->nullable();
            $table->longText('lmaternelle')->nullable();
            $table->longText('lparlée')->nullable();
            $table->string('ppere')->nullable();
            $table->string('npere')->nullable();
            $table->string('pmere')->nullable();
            $table->string('nmere')->nullable();
            $table->string('pays')->nullable();
            $table->string('dicipline')->nullable();
            $table->string('etablissement')->nullable();
            $table->string('diplome')->nullable();
            $table->string('dprogramme')->nullable();
            $table->string('lenseignement')->nullable();
            $table->string('ecomparative')->nullable();
            $table->string('type_formation')->nullable();
            $table->string('specialite')->nullable();
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
        Schema::dropIfExists('demandes');
    }
}
