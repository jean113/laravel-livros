<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use Illuminate\Support\Facades\DB;

class Controlador extends Controller
{
    //
    public function index()
    {
        $livro = DB::table('livros')
            ->select(['livros.id', 'livros.titulo', 'livros.dtEdicao', 'livros.paginas', 'livros.impressao', 
                'livros.descricao', 'autores.nome as autor', 'editoras.nome as editora'])
            ->join('autores', 'autores.id', '=', 'livros.autor')
            ->join('editoras', 'editoras.id', '=', 'livros.editora')
            // ->where('users.name', 'like', '%' . $request->name . '%')
            ->get();

        // $livro = Livros::all();
        return view('index', compact('livro'));
    }
}
