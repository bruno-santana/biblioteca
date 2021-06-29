<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('categoria_id');
            $table->string('titulo');
            $table->string('autor');
            $table->integer('edicao');
            $table->integer('ano_edicao');
            $table->string('editora');
            $table->date('data_publicacao');
            $table->string('isbn')->nullable();
            $table->string('origem')->nullable();
            $table->string('localizacao')->nullable();
            $table->text('sinopse')->nullable();
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
        Schema::dropIfExists('livros');
    }
}
