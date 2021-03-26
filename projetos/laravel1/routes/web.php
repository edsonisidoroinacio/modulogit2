<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

  Rotas da Web

  Aqui é onde você pode registrar as rotas da web para o seu aplicativo. Esses
| as rotas são carregadas pelo RouteServiceProvider dentro de um grupo que
| contém o grupo de middleware "web". Agora crie algo ótimo!
*/

/*Minhas Anotações Edson*/

/*  :: significa ?

/* Route::get('/', function () {
      return view('welcome');
});  */
Route::view('/','welcome');

/* Route::get('teste , function() {
      return view('teste');
});*/
Route::view('/teste','teste');

/* Se quiser que todo acesso vá direto para a pasta teste
usa      Route::redirect('/', 'teste')*/

/*Route::get('/noticia/alguma coisa', function () {
   echo "TITULO: Título qualquer";
}); ou redirecionar o usuario direto a noticia como rota abaixo*/
Route::get('/noticia/{slug}', function() {
      echo "TITULO: titulo qualquer";
});

/* Com o slug, tudo que digitar no navegador na URL após /noticia, ocorrerá o valor 
igual a ser exibido na página*/
Route::get('noticia/{slug}', function($slug) {
      echo "slug: ".$slug;
});

Route::get('/noticia/{slug}/comentario/{id}', function($slug, $id) {
      echo "Mostrando o comentário ".$id." da noticia ".$slug;
});
