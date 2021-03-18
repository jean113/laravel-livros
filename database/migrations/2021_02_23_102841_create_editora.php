<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editora', function (Blueprint $table) {
            $table->increments('id'); //chave primaria
            $table->string('nome',50);
            $table->string('telefone',17)->nullable(); //pode ser nulo
            $table->string('email',30)->nullable(); //pode ser nulo
            $table->string('obs',100)->nullable(); //pode ser nulo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('editora');
    }
}
