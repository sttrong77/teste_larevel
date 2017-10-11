<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/esportes', function(){
   $titulo = "Futebol";
   $esportes = array(
       'Futebol',
       'Tênis',
       'Futsal',
       'Basquete',
       'Atletismo'
   );
   return view('esporte', compact('titulo','esportes')); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
