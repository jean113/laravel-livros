@extends('template.geral')
@section('conteudo')

        <header>

            <h1>Cadastro de Livros</h1>

            <a href="/livros"><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>

        <main>

            <form role="form" action="/livros" method="post">

                <div class="campos">
    
                    <div>
                        <label for="">Título</label>
                        <input type="text" name="titulo"  maxlength="25" required/>
                    </div>
                    
                    <div>
                        <label for="">Autor</label>
                    <select id="autor" name="autor" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        
                            <option value="1">Jean</option>
                       
                    </select>
                    </div>
                    
                    <div>
                        <label for="">Editora</label>
                        <select id="editora" name="editora" required>
                            <option value="" disabled selected>Selecione uma opção</option>
                                <option value="1">Editora Abril</option>
                           
                        </select>
                    </div>
        
                    <div>
                        <label for="">Data da edição</label>
                        <input type="date" name="dtEdicao" required/>
                    </div>
        
                    <div>
                        <label for="">Páginas</label>
                    <input type="number" name="paginas"/>
        
                    </div>
                    
                    <div>
                        <label for="">Tipo de Impressão</label>
                    <input type="text" name="impressao" maxlength="15"/>
        
                    </div>
                    
        
                    <div>
                        <label for="">Descrição</label>
                        <textarea name="descricao" maxlength="200"></textarea>
        
                    </div>
    
                </div>
    
                <button type="submit" class="botao_cadastrar">Salvar</button>
            </form>

        </main>



@endsection
