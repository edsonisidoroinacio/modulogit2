<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/','welcome');
Route::view('/teste','teste');

Route::get('/noticia/{slug}', function($slug) {
    echo "Slug: ".$slug;
});

Route::get('/noticia/{slug}/comentario/{id}', function($slug, $id) {
    echo "MOSTRANDO O COMENTÁRIO".$id."DA NOTICIA".$slug;
});

Route::get('/user/{name}', function($name){
    echo "Mostrando usuário de NOME".$name;
})->where('name' , '[a-z]+');

Route::get('/user/{id}', function($id){
    echo "Mostrando usuário ID".$id;
});