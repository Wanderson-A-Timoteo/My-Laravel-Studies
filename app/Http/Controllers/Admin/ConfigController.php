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

        $nome = 'Wanderson';
        $idade = 20;

        $ingredientes = [
            'Trigo',
            'Ovo',
            'Fermento',
            'Açucar'
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'lista' => $ingredientes
        ];

        return view('admin.config', $data);



        // $cidade = $request->input('cidade', 'Cuiabá');
        // $nome = $request->input('nome', 'Visitante');

        // $dados = $request->only([ 'nome', 'idade' ]);

        // $exeto = $request->except([ 'idade', '_token' ]);

        // print_r($dados);
        // print_r($exeto);


    }

    public function info() {
        echo "Configurações das informações";
    }

    public function permissoes() {
        echo "Configurações PERMISSÕES ";
    }
}
