@extends('template.geral')
@section('conteudo')

    <header>

        <h1>Edição de Autores</h1>

        <a href="/autores"><i class="fa fa-arrow-left"></i>Voltar</a>

    </header>

    <main>

        @component('components.formulario', ['rota' => '/autores/'.$autor->id, 'item' => $autor] )
            
        @endcomponent

    </main>

@endsection

