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

*/

 /*
 Foi criado na pasta app/Http/Controllers a pasta Admin e por fim movido o arquivo ConfigController.php
 que estava na pasta Controllers para a pasta Controllers/Admin.
Dessa forma precisamos fazer algumas alterações, pois quando acessamos a rota /config ocorre o erro
(  Target class [App\Http\Controllers\ConfigController] does not exist.  )

Para corrigir o erro precisamos definir as pastas, ou seja, os namespaces que eles estão enquadrados
*/
Route::get('/', 'HomeController');
Route::view('/teste', 'teste');

// Como foi criado o TodoController ele já cria todas as rotas usando o resource dele, para cada action respectiva
Route::resource('todo', 'TodoController');
/* AS ROTAS CRIADAS AUTOMATICAMENTE SÃO:
GET - /todo - index todo.index - LISTA OS ITENS
GET - /todo/create - create - todo.create - FORM DE CRIAÇÃO
POST - /todo - store - todo.store - RECEBER OS DADOS E ADD ITEM
GET - /todo/{id} - show - todo.show - ITEM INDIVIDUAL
GET - /todo/{id}/edit - edit - todo.edit - FORM DE EDIÇÃO
PUT - /todo/{id} - update - todo.update - RECEBER OS DADOS E UPDATE ITEM
DELETE - /todo/{id} - destroy - todo.destroy - DELETAR O ITEM
*/

// Rotas de TarefasController e suas respectivas Actions
// Depois que foi criado o controller TodoController.php foi resumido todas estas rotas abixo
// epenas com Route::resource('todo', 'TodoController');
// Route::prefix('/tarefas')->group(function() {

//     Route::get('/', 'TarefasController@list')->name('tarefas.list'); //Listagem de tarefas

//     Route::get('add', 'TarefasController@add')->name('tarefas.add'); //Tela de adição
//     Route::post('add', 'TarefasController@addAction'); // Tela de ação de adição

//     Route::get('edit/{id}', 'TarefasController@edit')->name('tarefas.edit'); // Tela de adição
//     Route::post('edit/{id}', 'TarefasController@editAction'); // Tela de ação de edição

//     Route::get('delete/{id}', 'TarefasController@del')->name('tarefas.del');  // Tela de ação de deletar

//     Route::get('marcar/{id}', 'TarefasController@done')->name('tarefas.done');  // Marcar resolvido/não
// });

Route::prefix('/config')->group(function() {

    Route::get('/', 'Admin\ConfigController@index');
    Route::post('/', 'Admin\ConfigController@index');
    Route::get('info', 'Admin\ConfigController@info');
    Route::get('permissoes', 'Admin\ConfigController@permissoes');

});

// Route::fallback(function() {
//     return view('404');
// });



// Route::get('/', 'Controller');
// Route::post('/usuario', 'Controller');
// Route::put('/usuario', 'Controller');
// Route::patch('/usuario', 'Controller');
// Route::delete('/usuario', 'Controller');
// Route::options('/usuario', 'Controller');




// Route::post('/usuario', 'Controller');



// Route::get('/usuario/{name}', function($name) {
//     echo "Mostrando o usuario de NOME: ".$name;
// });

// Route::get('/usuario/{id}', function($id) {
//     echo "Mostrando o usuario ID: ".$id;
// });


// Route::get('/usuario/{name}/usuario/{id}', function($name, $id) {
//     echo "Mostrando o usuário de NOME: ".$name." e ID ".$id;
// });


// Route::get('/config', function() {
//     return view('config');
// });

// Route::get('/config/info', function() {
//     echo "Informações do usuário";
// })->name('info');

// Route::get('/config/permissoes', function() {
//     echo "PERMISSÕES do usuário";
// })->name('permissoes');


// Route::get('/', 'HomeController');
// Route::view('/teste', 'teste');

// Route::prefix('/config')->group(function() {
//     Route::get('/', function() {
//         //return view('config');
//     });

//     Route::get('info', function() {
//         echo "Informações do usuário";
//     });

//     Route::get('permissoes', function() {
//         echo "PERMISSÕES do usuário";
//     });
// });


