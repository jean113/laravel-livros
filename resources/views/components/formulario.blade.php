<form role="form" action="{{$rota}}" method="post">
    @csrf
    <div class="campos">
        <div>
            <label for="">Nome</label>
            <input type="text" name="nome" maxlength="50" value="{{ isset($item) ? $item->nome : '' }}" required/>
        </div>

        <div>
            <label for="">Telefone</label>
            <input type="tel" name="telefone" value="{{ isset($item) ? $item->telefone : '' }}" maxlength="17"
            pattern="(\([0-9]{3}\))?(([0-9]){2})?([0-9]){5}-([0-9]){4}"/>
        </div>

        <div>
            <label for="">E-mail</label>
            <input type="email" name="email" value="{{ isset($item) ? $item->email : '' }}" maxlength="30"/>
        </div>

        <div>
            <label for="">Observação</label>
            <textarea name="obs" maxlength="100"> {{ isset($item) ? $item->obs : '' }}</textarea>

        </div>

        
    </div>
    
    <button type="submit" class="botao_cadastrar">Salvar</button>
</form>