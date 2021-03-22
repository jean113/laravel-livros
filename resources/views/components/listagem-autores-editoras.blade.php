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
                       
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>

                    <a href="{{$rota}}" class="botao_editar"> <i class="fa fa-edit fa-lg"></i> </a>
                    
                    <a href="{{$rota}}/apagar" class="botao_excluir" 
                      onclick="return confirm('Deseja realmente excluir este registro?')">  
                        
                        <i class="fa fa-trash-o fa-lg"></i>  
                    </a>

                  </td>
      
                </tr>

              </tbody>
            </table>
