<?php

use App\Models\Aluno;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',45);
            $table->string('matricula',45);
            $table->string('datanascimento',45);
            $table->string('responsavelFinanceiro',45);
            $table->string('cpf',45);
            $table->integer('idcursos');
            $table->integer('idplano');
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
        Schema::dropIfExists('alunos');
    }
}
