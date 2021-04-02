<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editoras;

class ControllerEditoras extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $editora = Editoras::all();
        return view('editoras.editoras', compact('editora'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('editoras.editoras-novo');
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
        $editora = new Editoras();

        $editora->nome = $request->input('nome');
        $editora->telefone = $request->input('telefone');
        $editora->email = $request->input('email');
        $editora->obs = $request->input('obs');

        $editora->save();

        return redirect('/editoras');
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
        $editora = Editoras::find($id);
      
        if(isset($editora))
            return view('editoras.editoras-editar', compact('editora'));

        return redirect('/editoras');
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
        $editora = Editoras::find($id);
        if(isset($editora))
        {
            $editora->nome = $request->input('nome');
            $editora->telefone = $request->input('telefone');
            $editora->email = $request->input('email');
            $editora->obs = $request->input('obs');

            $editora->save();
        }

        return redirect('/editoras');
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
        $editora = Editoras::find($id);
        if(isset($editora))
            $editora->delete();

        return redirect('/editoras');
    }
}
