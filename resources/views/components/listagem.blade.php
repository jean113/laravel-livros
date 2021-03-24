@extends('template.geral')
@section('conteudo')
      <table>
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nome </th>
                  <th>Telefone</th>
                  <th>E-mail</th>
                  <th>Observações</th>
                </tr>
              </thead>
              <tbody>
                @foreach($lista as $item)       
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->nome}}</td>
                      <td>{{$item->telefone}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->obs}}</td>
                      <td>

                        <a href="{{$rota}}/editar/{{$item->id}}" class="btn btn-primary botao_editar"> <i class="fa fa-edit fa-lg"></i> </a>
                        
                        <a href="{{$rota}}/apagar" class="botao_excluir" 
                          onclick="return confirm('Deseja realmente excluir este registro?')">  
                            
                            <i class="fa fa-trash-o fa-lg"></i>  
                        </a>

                      </td>
          
                    </tr>
                @endforeach
              </tbody>
      </table>
@endsection
