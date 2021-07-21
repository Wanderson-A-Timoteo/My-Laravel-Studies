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
*/
// Rotas básicas
Route::view('/', 'welcome');
//Podemos redirecionar a rota de uma pg para qualquer uma que desejamos usando  Route::redirect
// Sempre que uma pessoa acessar a raiz do site será redirecionado para a pg que desejamos
//Route::redirect('/', '/teste');
Route::view('/teste', 'teste');

// Rotas dinâmicas  com parâmetros
Route::get('/noticia/{slug}', function($slug) {
    echo "slug: ".$slug;
});
// Quando o usuario digitar uma url qlqr a rota dinâmica pega as informações digitadas e inserem entre as chaves como parâmetro
Route::get('/noticia/{slug}/comentario/{id}', function($slug, $id) {
    echo "Mostrando o comentario".$id." da noticia ".$slug;
});
