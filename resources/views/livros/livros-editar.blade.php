@extends('template.geral')
@section('conteudo')

        <header>

            <h1>Cadastro de Livros</h1>

            <a href='/livros'><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>

        <main>

            <form role="form" action="{{'/livros/'.$livro->id}}" method="post">
                @csrf
                <div class="campos">
    
                    <div>
                        <label for="">Título</label>
                        <input type="text" name="titulo"  maxlength="25" value="{{$livro->titulo}}" required/>
                    </div>
                    
                    <div>
                        <label for="">Autor</label>
                    <select id="autor" name="autor" required>

                        <option value="" disabled>Selecione uma opção</option>

                        @foreach($autor as $item)
                            <option value="{{$item->id}}" {{$item->id == $livro->autor ? 'selected' : ''}}> 
                                {{$item->nome}} </option>
                        @endforeach
                        
                    </select>
                    </div>
                    
                    <div>
                        <label for="">Editora</label>
                        <select id="editora" name="editora" required>
                            <option value="" disabled>Selecione uma opção</option>
                                
                            @foreach($editora as $item)       
                                <option value="{{$item->id}}" {{$item->id == $livro->editora ? 'selected' : ''}}> 
                                    {{$item->nome}} </option>
                            @endforeach    
                           
                        </select>
                    </div>
        
                    <div>
                        <label for="">Data da edição</label>
                        <input type="date" name="dtEdicao" value="{{$livro->dtEdicao}}" required/>
                    </div>
        
                    <div>
                        <label for="">Páginas</label>
                        <input type="number" name="paginas"  value="{{$livro->paginas}}"/>
        
                    </div>
                    
                    <div>
                        <label for="">Tipo de Impressão</label>
                    <input type="text" name="impressao" value="{{$livro->impressao}}" maxlength="15"/>
        
                    </div>
                    
        
                    <div>
                        <label for="">Descrição</label>
                        <textarea name="descricao" maxlength="200" value="{{$livro->descricao}}" required></textarea>
        
                    </div>
    
                </div>
    
                <button type="submit" class="botao_cadastrar">Salvar</button>
            </form>

        </main>



@endsection
