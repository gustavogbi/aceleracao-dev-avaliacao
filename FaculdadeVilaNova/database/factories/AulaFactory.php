<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'num_aula' => $this->faker->randomNumber(2),
            'tema' => $this->faker->unique()->name(),
            'duracao' => $this->faker->randomNumber(2),
            'observacao' => $this->faker->paragraph(2),
            'idcurso' => $this->faker->unique()->randomNumber(2),
            'idprofessor' => $this->faker->unique()->randomNumber(2),
        ];
    }
}
