@extends('template.criar')
@section('conteudo')

    <header>

        <h1>Cadastro de Autores</h1>

        <a href="/autores"><i class="fa fa-arrow-left"></i>Voltar</a>

    </header>

    <main>

        @component('components.formulario', ['rota' => '/autores/criar'])
            
        @endcomponent

    </main>

@endsection

