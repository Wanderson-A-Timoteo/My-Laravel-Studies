<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB; // usar com Query Builder
use App\Models\Tarefa;

class TarefasController extends Controller
{
    // Controllers com suas respectivas actions
    public function list() {
        // Exemplo com query build para listar tudo
        // $list = DB::select('SELECT * FROM tarefas');
        // return view('tarefas.list', [
        //     'list' => $list
        // ]);

        // Exemplo com Eloquent ORM para listar tudo
        $list = Tarefa::all();
        return view('tarefas.list', [
            'list' => $list
         ]);
    }

    public function add() {
        return view('tarefas.add');
    }

    public function addAction(Request $request) {
        $request->validate([
            'titulo' => [ 'required', 'string' ]
        ]);

        $titulo = $request->input('titulo');
        // Exemplo com Query Builder
        // DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)', [
        //     'titulo' => $titulo
        // ]);

        // Exemplo com Eloquent ORM
        $tarefa = new Tarefa;
        $tarefa->titulo = $titulo;
        $tarefa->save();

        return redirect()->route('tarefas.list');
        // if ($request->filled('titulo')) { // Se o campo título estiver preenchido
        //     $titulo = $request->input('titulo');

        //     DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)', [
        //         'titulo' => $titulo
        //     ]);

        //     return redirect()->route('tarefas.list');

        // } else { // Se o campo título NÃO estiver preenchido, será redirecionado para a própria pg com a mensagem warning
        //     return redirect()
        //     ->route('tarefas.add')
        //     ->with('warning', 'Você não preencheu o título');
        // }
    }

    public function edit($id) {
        //Exemplo com Query Builder
        // $data = DB::select('SELECT * FROM tarefas WHERE id = :id', [
        //     'id'=> $id
        // ]);

        // if(count($data) > 0) {
        //     return view('tarefas.edit', [
        //         'data' => $data[0]
        //     ]);
        // } else {
        //     return redirect()->route('tarefas.list');
        // }

        // Exemplo com Eloquent ORM
        $data = Tarefa::find($id);
        if ($data) {
            return view('tarefas.edit', [
                'data' => $data
            ]);
        } else {
            return redirect()->route('tarefas.list');
        }
    }

    public function editAction(Request $request, $id) {
        $request->validate([
            'titulo' => [ 'required', 'string' ]
        ]);

        $titulo = $request->input('titulo');

        // Exemplo com Query Builder
        // DB::update('UPDATE tarefas SET titulo = :titulo WHERE id = :id', [
        //     'id' => $id,
        //     'titulo' => $titulo
        // ]);

        // Exemplo com Eloquent ORM
        // $tarefa = Tarefa::find($id);
        // $tarefa->titulo = $titulo;
        // $tarefa->save();

        // Usando Tarefa::find($id)->update([ titulo'->$titulo ]);
        // Exemplo com Eloquent para permitira editar varios campos ao mesmo tempo
        // É preciso definir a permição em Models Tarefas.php
        Tarefa::find($id)->update([ 'titulo'->$titulo ]);

        return redirect()->route('tarefas.list');

        // if ($request->filled('titulo')) {
        //     $titulo = $request->input('titulo');
        //     $data = DB::select('SELECT * FROM tarefas WHERE id = :id', [
        //         'id'=> $id
        //     ]);

        //     if(count($data) > 0) {
        //         DB::update('UPDATE tarefas SET titulo = :titulo WHERE id = :id', [
        //             'id' => $id,
        //             'titulo' => $titulo
        //         ]);
        //     }

        //     return redirect()->route('tarefas.list');

        // } else {
        //     return redirect()
        //     ->route('tarefas.edit', ['id'=>$id])
        //     ->with('warning', 'Você não preencheu o título');
        // }
    }

    public function del($id) {

        // Exemplo com Query Builder
        // DB::delete('DELETE FROM tarefas WHERE id = :id', [
        //     'id' => $id
        // ]);

        // Exemplo com Eloquent ORM
        Tarefa::find($id)->delete();

        return redirect()->route('tarefas.list');
    }

    public function done($id) {
        // opção 1: select + update
        // opção 2: update matematico
        // Vamos usar a segunda opção, neste caso ficará:
        // Se resolvido = 0, será 1 - 0 = 1 marcará
        // Se resolvido = 1, será 1 -1 = 0 desmarcará


        // Exemplo com Query Builder
        // DB::update('UPDATE tarefas SET resolvido = 1 - resolvido WHERE id = :id', [
        //     'id' => $id
        // ]);

        // Exemplo com Eloquent ORM
        $tarefa = Tarefa::find($id);
        if($tarefa) {
            $tarefa->resolvido = 1 - $tarefa->resolvido;
            $tarefa->save();
        }

        return redirect()->route('tarefas.list');
    }
}
