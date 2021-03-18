<form role="form" action="{{$rota}}" method="post">
    <div class="campos">
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" maxlength="50" required/>
        </div>

        <div>
            <label for="">Telefone</label>
            <input type="tel" name="telefone" maxlength="17"
            pattern="(\([0-9]{3}\))?(([0-9]){2})?([0-9]){5}-([0-9]){4}"/>
        </div>

        <div>
            <label for="">E-mail</label>
            <input type="email" name="email"  maxlength="30"/>
        </div>

        <div>
            <label for="">Observação</label>
            <textarea name="obs" maxlength="100"></textarea>

        </div>

        
    </div>
    
    <button type="submit" class="botao_cadastrar">Salvar</button>
</form>