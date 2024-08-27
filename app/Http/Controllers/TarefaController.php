<?php

namespace App\Http\Controllers;

use App\Models\Tarefa; 
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        
        $tarefas = Tarefa::all();

        foreach($tarefas as $tarefa){
            $tarefa->titulo = ($tarefa->titulo);
            $tarefa->descricao = ($tarefa->descricao);
        }
        
       
        return view('tarefas', ['tarefas' => $tarefas]);
    }

    public function store() {
        $tarefa = new Tarefa();
        $tarefa->titulo = ('Sei la');
        $tarefa->descricao = ('joaovitor@gmail.com');
        $tarefa->data_criacao = '2005-08-30';
        $tarefa->save();
}
}