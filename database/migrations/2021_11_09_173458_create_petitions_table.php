<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\Petition;

class CreatePetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petitions', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('user_id');
            $table->string('subdomain')->nullable();
            $table->string('predseda_name')->nullable();
            $table->string('vybor_names')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('details')->nullable();
            $table->text('embed_code')->nullable();
            $table->integer('mot_text')->nullable();
            $table->integer('status_peticia')->nullable();
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
        Schema::dropIfExists('petitions');
    }
}
