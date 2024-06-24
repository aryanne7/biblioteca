<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::latest()->paginate(10);
        return view('index', compact('livros'));
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'nullable',
        ]);

        Livro::create($request->all());

        return redirect()->route('index')
                         ->with('success', 'Livro cadastrado com sucesso!');
    }

    public function show(Livro $livro)
    {
        return view('livros.show', compact('livro'));
    }

    public function edit(Livro $livro)
    {
        return view('livros.edit', compact('livro'));
    }

    public function update(Request $request, Livro $livro)
    {
        $request->validate([
            'autor' => 'required',
            'titulo' => 'required',
            'subtitulo' => 'nullable',
            'edicao' => 'nullable',
            'editora' => 'nullable',
            'ano_publicacao' => 'nullable|integer',
        ]);

        $livro->update($request->all());

        return redirect()->route('livros.index')
                         ->with('success', 'Livro atualizado com sucesso!');
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livros.index')
                         ->with('success', 'Livro excluído com sucesso!');
    }

}
