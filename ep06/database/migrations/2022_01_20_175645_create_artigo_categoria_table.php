<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtigoCategoriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artigo_categoria', function (Blueprint $table) {
            $table->id();
            $table->integer('fk_id_categoria');
            $table->integer('fk_id_artigo');

            $table->foreign('fk_id_categoria')->references('id')->on('categorias');
            $table->foreign('fk_id_artigo')->references('id')->on('artigos');
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
        Schema::dropIfExists('artigo_categoria');
    }
}
