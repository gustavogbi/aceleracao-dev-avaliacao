<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role',20)->default(0);
            $table->string('cpf',45)->unique()->nullable();
            $table->timestamp('email_verified_atn')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        //Administradores
        $this->newCad('Administrador','adm@fvl.com.br','123456','9');
        $this->newCad('Pedro','pivow@fvl.com.br','123456','9');
        $this->newCad('Lucas', 'lucas@fvl.com', '123456','9');
        $this->newCad('Fabio','fabio@fvl.com.br','123456','9');
        $this->newCad('Gustavo','gustavo@fvl.com.br','123456','9');
        $this->newCad('Leal','leal@fvl.com.br','123456','9');

}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
    public function newCad($name,$email,$pass, $role){

        $cad = new User();
        $cad->name = $name;
        $cad->email = $email;
        $cad->role = $role;
        $cad->password = bcrypt($pass);
        $cad->save();
    }
}
