<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'matricula' => $this->faker->unique()->randomNumber(3, false),
            'datanascimento' => $this->faker->date('d-m-Y'),
            'responsavelFinanceiro' => $this->faker->name(),
            'cpf' => mt_rand(10000000000, 99999999999),
            'idcursos' => $this->faker->unique()->randomNumber(3, false),
            'idplano' => $this->faker->unique()->randomNumber(3, false)
        ];
    }
}
