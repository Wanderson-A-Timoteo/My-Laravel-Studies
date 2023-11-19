<?php
// Namespace antigo
//namespace App\Http\Controllers;

// namespace atualizado com \Admin
namespace App\Http\Controllers\Admin;

// add  a importação ( use App\Http\Controllers\Controller; ) para ser encontrado a class extends Controller
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ConfigController extends Controller
{
    public function __construct() {
        $this-> middleware('auth');
    }

    public function index(Request $request) {
        $user = Auth::user();

        $nome = $user->name;
        $idade = 20;
        $cidade = $request->input('cidade');

        $ingredientes = [
            'Trigo',
            'Ovo',
            'Fermento',
            'Açucar'
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'cidade' => $cidade,
            'lista' => $ingredientes,
            'showForm' => Gate::allows('see-form')
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
