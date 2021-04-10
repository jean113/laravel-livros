<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use App\Models\Autores;
use App\Models\Editoras;
use Illuminate\Support\Facades\DB;

class ControllerLivros extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livro = DB::table('livros')
            ->select(['livros.id', 'livros.titulo', 'livros.dtEdicao', 'livros.paginas', 'livros.impressao', 
                'livros.descricao', 'autores.nome as autor', 'editoras.nome as editora'])
            ->join('autores', 'autores.id', '=', 'livros.autor')
            ->join('editoras', 'editoras.id', '=', 'livros.editora')
            // ->where('users.name', 'like', '%' . $request->name . '%')
            ->get();

        // $livro = Livros::all();
        return view('livros.livros', compact('livro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $autor = Autores::all();
        $editora = Editoras::all();
        return view('livros.livros-novo', compact(['autor', 'editora']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $livro = new Livros();

        $livro->titulo = $request->input('titulo');
        $livro->autor = $request->input('autor');
        $livro->editora = $request->input('editora');
        $livro->dtEdicao = $request->input('dtEdicao');
        $livro->paginas = $request->input('paginas');
        $livro->impressao = $request->input('impressao');
        $livro->descricao = $request->input('descricao');

        $livro->save();

        return redirect('/livros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $livro = Livros::find($id);
      
        if(isset($livro))
        {
            $autor = Autores::all();
            $editora = Editoras::all();
            return view('livros.livros-editar', compact(['livro','autor','editora']));
        }

        return redirect('/livros');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $livro = Livros::find($id);
        if(isset($livro))
        {
            $livro->titulo = $request->input('titulo');
            $livro->autor = $request->input('autor');
            $livro->editora = $request->input('editora');
            $livro->dtEdicao = $request->input('dtEdicao');
            $livro->paginas = $request->input('paginas');
            $livro->impressao = $request->input('impressao');
            $livro->descricao = $request->input('descricao');

            $livro->save();

            return redirect('/livros');

        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $livro = Livros::find($id);
        if(isset($livro))
            $livro->delete();

        return redirect('/livros');
    }
}
