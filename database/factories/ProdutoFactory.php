<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Categoria;   
use App\Models\User;

class ProdutoFactory extends Factory
{
   
    public function definition(): array
    {
        $nome =  $this->faker->unique()->sentence();
        return [
            'nome' => $this->faker->unique()->sentence(),
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(400, 400),
            'id_user' => User::pluck('id')->random(),
            'id_categoria' => Categoria::pluck('id')->random(),
        ];
    }
}
