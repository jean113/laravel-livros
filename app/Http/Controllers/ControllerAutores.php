<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autores;

class ControllerAutores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autor = Autores::all();
        return view('autores.autores', compact('autor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('autores.autores-novo');
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
        $autor = new Autores();

        $autor->nome = $request->input('nome');
        $autor->telefone = $request->input('telefone');
        $autor->email = $request->input('email');
        $autor->obs = $request->input('obs');

        $autor->save();

        return redirect('/autores');

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
        $autor = Autores::find($id);
        if(isset($autor))
            return view('autores.autores-editar', compact('autor'));

        return redirect('/autores');
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
        $autor = Autores::find($id);
        if(isset($autor))
        {
            $autor->nome = $request->input('nome');
            $autor->telefone = $request->input('telefone');
            $autor->email = $request->input('email');
            $autor->obs = $request->input('obs');

            $autor->save();
        }

        return redirect('/autores');
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
        $autor = Autores::find($id);
        if(isset($autor))
            $autor->delete();

        return redirect('/autores');

    }
}
