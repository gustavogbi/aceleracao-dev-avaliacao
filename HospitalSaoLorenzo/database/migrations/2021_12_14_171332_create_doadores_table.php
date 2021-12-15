<?php

use App\Models\Doador;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadores', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->string('peso');
            $table->string('altura');
            $table->boolean('fumante');
            $table->boolean('doencas');
            $table->string('observacoes');
            $table->timestamps();
        });

        $this->newCad(
            'Benedita Analu Ramos',
            '81988406566',
            'beneditaanaluramos_@gmail.com',
            70,
            177,
            1,
            0,
            'roxo'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doadores');
    }

    public function newCad(
        $nome,
        $telefone,
        $email,
        $peso,
        $altura,
        $fumante,
        $doencas,
        $observacoes
    ) {
        $cad = new Doador();
        $cad->nome = $nome;
        $cad->telefone = $telefone;
        $cad->email = $email;
        $cad->peso = $peso;
        $cad->altura = $altura;
        $cad->fumante = $fumante;
        $cad->doencas = $doencas;
        $cad->observacoes = $observacoes;
        $cad->save();
    }
}
