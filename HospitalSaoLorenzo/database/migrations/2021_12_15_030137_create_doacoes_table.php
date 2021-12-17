<?php


use App\Models\Doacoes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->integer('qtd_litros');
            $table->timestamps();
        });

        $this->newCad('Guilherme Osvaldo', '61985445566', 'guilhermeosvaldo@hotmail.com', 5);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doacoes');
    }


    public function newCad($nome, $telefone, $email, $qtd_litros)
    {
        $cad = new Doacoes();
        $cad->nome = $nome;
        $cad->telefone = $telefone;
        $cad->email = $email;
        $cad->qtd_litros = $qtd_litros;
        $cad->save();
    }
}
