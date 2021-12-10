<?php

use App\Models\QuadroMensal;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuadroMensalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quadro_mensals', function (Blueprint $table) {
            $table->id();
            $table->string('funcionario');
            $table->string('dia');
            $table->integer('entrada');
            $table->integer('saida');
            $table->timestamps();
        });

        $this->newQuadroMensal('João', 'Seg', '8', '18');
        $this->newQuadroMensal('Cleber', 'Seg', '9', '19');
        $this->newQuadroMensal('Flores', 'Seg', '7', '14');
        $this->newQuadroMensal('Claudete', 'Seg', '12', '20');
        $this->newQuadroMensal('Fabiano', 'Seg', '13', '17');
        $this->newQuadroMensal('João', 'Ter', '8', '18');
        $this->newQuadroMensal('Cleber', 'Ter', '9', '19');
        $this->newQuadroMensal('Flores', 'Ter', '7', '14');
        $this->newQuadroMensal('Claudete', 'Ter', '12', '20');
        $this->newQuadroMensal('Fabiano', 'Ter', '13', '17');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quadro_mensals');
    }

    public function newQuadroMensal($funcionario, $dia, $entrada, $saida)
    {
        $cad = new QuadroMensal();
        $cad->funcionario = $funcionario;
        $cad->dia = $dia;
        $cad->entrada = $entrada;
        $cad->saida = $saida;
        $cad->save();
    }
}
