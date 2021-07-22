<?php
// Namespace antigo
//namespace App\Http\Controllers;

// namespace atualizado com \Admin
namespace App\Http\Controllers\Admin;

// add  a importação ( use App\Http\Controllers\Controller; ) para ser encontrado a class extends Controller
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    //
    public function index() {
        return view('config');
    }

    public function info() {
        echo "Configurações INFO 3";
    }

    public function premissoes() {
        echo "Configurações PERMISSÕES 3";
    }
}
