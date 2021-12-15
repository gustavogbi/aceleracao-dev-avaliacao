<?php

use App\Models\BancoSangue;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBancoSanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco_sangues', function (Blueprint $table) {
            $table->id();
            $table->string('tipo'); 
            $table->integer('contabilidade'); 
            $table->timestamps();
        });
        
        $this->newCad('O+','15');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banco_sangues');
    }
    
    public function newCad($tipo,$contabilidade){
        $cad = new BancoSangue();
        $cad->tipo = $tipo;
        $cad->contabilidade = $contabilidade;
        $cad->save();
    }
}
