<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKFZModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_f_z_models', function (Blueprint $table) {
            $table->id();
            $table->string('abkuerzung');
            $table->string('stadt');
            $table->string('landkreis');
            $table->string('bundesland');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('k_f_z_models');
    }
}
