<?php

use App\Models\User;
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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        $this->newCad('Administrador','adm@doitall.com.br','123456');
        $this->newCad('Pedro','pivow@doitall.com.br','123456');
        $this->newCad('Lucas', 'lucas@doitall.com', '123456');
        $this->newCad('Fabio','fabio@doitall.com.br','123456');
        $this->newCad('Gustavo','gustavo@doitall.com.br','123456');
        $this->newCad('Leal','leal@doitall.com.br','123456');

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



    public function newCad($name,$email,$pass){

        $cad = new User();
        $cad->name = $name;
        $cad->email = $email;
        $cad->password = bcrypt($pass);
        $cad->save();
    }
}
