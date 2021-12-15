<?php

use App\Models\Estagiario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstagiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estagiarios', function (Blueprint $table) {
            $table->id();;
            $table->string('nome');
            $table->string('grauDeEscolaridade');
            $table->string('telefone');
            $table->string('email'); 
            $table->timestamps();
        });
        
        $this->newCad('Guilherme Osvaldo','3º Periodo', '61985445566','guilhermeosvaldo@hotmail.com');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estagiarios');
    }

    
    public function newCad($nome, $grauDeEscolaridade,$telefone, $email){
        $cad = new Estagiario();
        $cad->nome = $nome;
        $cad->telefone = $telefone;
        $cad->email = $email;
        $cad->grauDeEscolaridade = $grauDeEscolaridade;
        $cad->save();
    }
}
