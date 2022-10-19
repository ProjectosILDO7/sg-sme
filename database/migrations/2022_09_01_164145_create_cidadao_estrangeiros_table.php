<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadaoEstrangeirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidadao_estrangeiros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nacionalidade');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->integer('num_passporte');
            $table->integer('num_registo');
            $table->date('data_emissao');
            $table->date('data_caducidade');
            $table->string('local_residente');
            $table->string('visto');
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
        Schema::dropIfExists('cidadao_estrangeiros');
    }
}
