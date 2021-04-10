@extends('template.geral')
@section('conteudo')

<header>
            

            <h1>Seja bem-vindo</h1>

            <a href="/login"> <i class="fa fa-sign-in"> </i>Login</a>
        </header>

       

            <main>
                <ul>
                    @foreach($livro as $item)
                        <li>
                            <b>Livro: </b> {{$item->titulo}} <br/>
                            <b>Autor: </b> {{$item->autor}}  <br/>
                            <b>Editora: </b>{{$item->editora}} <br/>
                            <b>Data de edição: </b>{{$item->dtEdicao}} <br/>
                            <b>Páginas: </b> {{$item->paginas}} <br/>
                            <b>Tipo de impressão: </b> {{$item->impressao}}  <br/>
                            <b>Descrição: </b>{{$item->descricao}} <br/>       
                        </li>
                    @endforeach
                </ul>

        </main>


@endsection
