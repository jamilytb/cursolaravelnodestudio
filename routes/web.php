<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
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

Route::get('/produt/{id}/{cat}', function($id, $cat){
    return "O id do produto é:".$id."<br>"."A categoria é:".$cat;
});

Route::redirect('/sobre', '/empresa');
Route::view('/empresa', 'site/empresa');

Route::get('/news', function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});