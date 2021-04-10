@extends('template.geral')
@section('conteudo')

        <header>

        <a href="/"><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>

        <main>

            <form role="form" action="/login" method="post">

                <div class="logo">
                    <i class="fa fa-user-circle fa-5x"></i>
                </div>
                
                <div class="campos">
                    <div>
                        <input type="text" name="login" placeHolder="Login"/>
                    </div>

                    <div>
                        <input type="password" name="senha" placeHolder="Senha"/>
                    </div>

                    <!-- {if="$DATA=='erro'"} -->
                    <span>Usuário inexistente e/ou senha inválida!!!</span>
                    <!-- {/if} -->

                    <button type="submit" class="botao_cadastrar">Login</button>

                    
                </div>


            </form>


        </main>

@endsection