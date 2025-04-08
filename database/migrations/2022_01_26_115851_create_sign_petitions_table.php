<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSignPetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sign_petitions', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('petition_id');
            // $table->integer('petition_id')->nullable();

            $table->integer('user_id');
            $table->foreignId('petition_id')->nullable()->constrained()->onDelete('cascade');
            //->references('id')->on('petitions')->onDelete('cascade')
            $table->string('meno')->nullable();
            $table->string('priezvisko')->nullable();
            $table->string('email')->nullable();
            $table->string('ulica_cislo')->nullable();
            $table->string('mesto_obec')->nullable();
            $table->string('psc')->nullable();
            $table->string('stat')->nullable();
            $table->string('meno_zastupcu')->nullable();
            $table->string('priezvisko_zastupcu')->nullable();
            $table->string('sedemnast_aviac')->nullable();
            $table->string('pravidla_pouzivania')->nullable();
            $table->integer('anonym')->nullable();
            $table->string('spracovanie_udajov')->nullable();
            $table->string('email_organizatorovi')->nullable();
            $table->string('nazov_prav_osoba')->nullable();
            $table->string('sidlo_prav_osoba')->nullable();
            $table->string('create_date');

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
        Schema::dropIfExists('sign_petitions');
    }
}
