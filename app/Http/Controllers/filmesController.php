<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index () {
        $filmes = Filme::all();

        return view('filmes.index', [
            'filmes' => $filmes
        ]);
    }

    public function show ($id) {
        $filme = Filme::find($id);
        return view('filmes.show', [
            'filme' => $filme,
        ]);
    }

    public function cadastrar() {
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form) {

        $dados = $form->validate([
            'nome' => 'required|min:3',
            'sinopse' => 'required',
            'ano' => 'required|integer',
            'categoria' => 'required',
            'capa' => 'required',
            'trailer' => 'required'
        ]);
        $path = $form->file('capa')->store('filmes', 'imagens');

        $dados['capa'] = $path;
        
        Filme::create($dados);
        
        return redirect()->route('filmes');
    }

    public function editarView ($id) {
        $filme = Filme::find($id);
        return view('filmes.editarView', [
            'filme' => $filme,
        ]);
    }
    
    public function editar(Request $form, $id) {
        $filme = Filme::find($id);


        $dados = $form->validate([
            'nome' => 'required|min:3',
            'sinopse' => 'required',
            'ano' => 'required|integer',
            'categoria' => 'required',
            'trailer' => 'required'
        ]);
            
        $filme->update($dados);
    
        return redirect()->route('filmes.mostrar', $id);
    }

    public function apagar(Filme $filme) {
        return view('filmes.apagar', [
            'filme' => $filme,
        ]);
    }

    public function deletar(Filme $filme) {
        $filme->delete();
        return redirect()->route('filmes');
    }
}
