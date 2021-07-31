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
    public function index(Request $request) {
        $url = $request->url();

        echo "URL: ".$url;
        return view('config');
    }

    public function info() {
        echo "Configurações das informações";
    }

    public function permissoes() {
        echo "Configurações PERMISSÕES ";
    }
}
