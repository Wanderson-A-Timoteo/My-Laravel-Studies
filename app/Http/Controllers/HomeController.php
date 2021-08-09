<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class HomeController extends Controller
{
    // A função __invoke() redireciona a pagina para a qual desejamos
    public function __invoke() {

        return view('welcome');
    }
}
