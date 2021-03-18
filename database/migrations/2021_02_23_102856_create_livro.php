<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro', function (Blueprint $table) 
        {
            $table->increments('id'); //chave primaria

            $table->integer('editora_id')->unsigned();// Id da tabela editora
            $table->foreign('editora_id')->references('id')->on('editora'); // Define o campo como chave extrangeira (foreign key)

            $table->integer('autor_id')->unsigned();// Id da tabela autor
            $table->foreign('autor_id')->references('id')->on('autor'); // Define o campo como chave extrangeira (foreign key)

            $table->string('titulo',25);
            $table->dateTime('dt_edicao', $precision = 0);
            $table->integer('paginas')->unique()->nullable(); //pode ser nulo
            $table->string('impressao',15)->nullable(); //pode ser nulo
            $table->string('descricao',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livro');
    }
}
