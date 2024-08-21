<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
      $this->call([
        //UsersSeeder::class,
        //CategoriasSeeder::class,
        ProdutosSeeder::class,
      ]);
    }
}
