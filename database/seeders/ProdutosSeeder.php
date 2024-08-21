<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;
use Database\Factories\ProdutoFactory;

class ProdutosSeeder extends Seeder
{
   
    public function run(): void
    {
        Produto::Factory(20)->create();

    }
}
