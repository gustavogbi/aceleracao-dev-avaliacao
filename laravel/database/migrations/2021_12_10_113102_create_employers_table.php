<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Employer;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('jobRole', 50);
            $table->integer('wage');
            $table->integer('serviceTime')->nullable();
            $table->timestamps();
        });
        

        $this->newEmployer('João','Supervisor de limpeza','6000', '2');
        $this->newEmployer('Cleber','Jardineiro','3000', '6');
        $this->newEmployer('Flores','Serviços gerais','1500', '12');
        $this->newEmployer('Claudete','Serviços gerais','800', '8');
        $this->newEmployer('Fabiano','Serviços gerais','1800', '6');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employers');
    }
    public function newEmployer($name,$jobRole,$wage,$serviceTime){
        $cad = new Employer();
        $cad->name = $name;
        $cad->jobRole = $jobRole;
        $cad->wage = $wage;
        $cad->serviceTime = $serviceTime;
        $cad->save();
    }
}
