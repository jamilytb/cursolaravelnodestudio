<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class ProdutoFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'nome' => $this->faker->unique()->sentence(),
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'slug' => $this
        ];
    }
}
