@extends('template.geral')
@section('conteudo')

      <table>
              <thead>
                <tr> 
                  <th style="width: 10px">#</th>
                  <th>Título </th>
                  <th>Autor</th>
                  <th>Editora</th>
                  <th>Data Edição</th>
                  <th>Páginas</th>
                  <th>Impressão</th>
                  <th>Descrição</th>

                </tr>
              </thead>
              <tbody>
                @foreach($lista as $item)       
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->titulo}}</td>
                      <td>{{$item->autor}}</td>
                      <td>{{$item->editora}}</td>
                      <td>{{$item->dtEdicao}}</td>
                      <td>{{$item->paginas}}</td>
                      <td>{{$item->impressao}}</td>
                      <td>{{$item->descricao}}</td>
                      <td>

                        <a href="{{$rota}}/editar/{{$item->id}}" class="btn btn-primary botao_cadastrar"> <i class="fa fa-edit fa-lg"></i> </a>
                        
                        <a href="{{$rota}}/apagar/{{$item->id}}" class="botao_excluir" onclick="return confirm('Deseja realmente excluir este registro?')">  
                            <i class="fa fa-trash-o fa-lg"></i>  
                        </a>

                      </td>
          
                    </tr>
                @endforeach
              </tbody>
      </table>
@endsection
