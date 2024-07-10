<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/empresa', function(){
    return view('site/empresa');
});

Route::any('/any', function(){
    return "permite todo tipo de acesso hppt (put, delete, delete, post)";
});

Route::match(['put', 'delete'], '/match', function(){
    return "permite apenas acessos definidos";
});

Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é:".$id."<br>"."A categoria é:".$cat;
});

Route::get('/patient/{id}', function($id = ''){
    return "O id do produto é:".$id;
});
