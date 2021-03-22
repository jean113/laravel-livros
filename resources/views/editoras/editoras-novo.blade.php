@extends('template.geral')
@section('conteudo')

    <header>

        
        <h1>Cadastro de Editoras</h1>

        <a href="/editoras"><i class="fa fa-arrow-left"></i>Voltar</a>


    </header>

    <main>

        @component('components.formulario', ['rota' => '/editoras'])
        
        @endcomponent

    </main>

@endsection
