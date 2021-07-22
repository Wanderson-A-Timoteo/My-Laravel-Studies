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

/*
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

// Rotas com Regex + Provider ( expressões regulares )
Route::get('/user/{name}', function($name) {
    echo "Mostrando o usuario de NOME: ".$name;
})->where('name', '[a-z]+');

Route::get('/user/{id}', function($id) {
    echo "Mostrando o usuario ID: ".$id;
});

// Rotas com nome + Redirect

Route::get('/config', function() {
    echo 'Configurações...';
});

Route::get('/config', function() {
    $link = route('info');

    echo "Link: ".$link;

    return view('config');
});


// Quando acessar /config o usuario é redirecionado para o link permissões,
// onde foi declarado um nome para a função
Route::get('/config', function() {
    return redirect()->route('permissoes');

    return view('config');
});

Route::get('/config', function() {
    return view('config');
});

Route::get('/config/info', function() {
    echo 'Configurações INFO';
})->name('info');

Route::get('/config/permissoes', function() {
    echo 'Configurações PERMISSÕES';
})->name('permissoes');
*/

Route::view('/', 'welcome');

Route::view('/teste', 'teste');

// Foi criado um grupo de rotas que tem o prefixo /config e então foi criado as rotas seguintes dele.
Route::prefix('config')->group(function() {

    Route::get('/', function() {
        return view('config');
    });

    Route::get('info', function() {
        echo "Configurações INFO 2";
    });

    Route::get('permissoes', function() {
        echo "Configurações PERMISSÕES 2";
    });

});
// Quando usuario digitar uma rota que não existe cairá no faalback, onde poderemos redirecionar
// o usuario para qualquer página que desejamos, a mais comum é a pg 404 criada em resources views
Route::fallback(function() {
    return view('404');
});


