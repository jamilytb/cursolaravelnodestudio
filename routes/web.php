<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);

//Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');
