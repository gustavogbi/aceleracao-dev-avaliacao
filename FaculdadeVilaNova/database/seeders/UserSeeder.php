<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'adm@fvl.com.br',
            'password' => '123456'
        ]);

        User::create([
            'name' => 'Pedro',
            'email' => 'pivow@fvl.com.br',
            'password' => '123456'
        ]);

        User::create([
            'name' => 'Lucas',
            'email' => 'lucas@fvl.co',
            'password' => '123456'
        ]);

        User::create([
            'name' => 'Fabio',
            'email' => 'fabio@fvl.com.br',
            'password' => '123456'
        ]);

        User::create([
            'name' => 'Gustavo',
            'email' => 'gustavo@fvl.com.b',
            'password' => '123456'
        ]);

        User::create([
            'name' => 'Leal',
            'email' => 'leal@fvl.com.br',
            'password' => '123456'
        ]);
    }
}
