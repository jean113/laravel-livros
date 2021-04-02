@extends('template.geral')
@section('conteudo')

    <header>

        <h1>Edição de Editoras</h1>

        <a href="/editoras"><i class="fa fa-arrow-left"></i>Voltar</a>

    </header>

    <main>

        @component('components.formulario', ['rota' => '/editoras/'.$editora->id, 'item' => $editora] )
            
        @endcomponent

    </main>

@endsection

