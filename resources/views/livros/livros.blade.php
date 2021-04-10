@component('components.painel')
@endcomponent


@component('components.listagem-livros', ['rota' => '/livros', 'lista' => $livro])
@endcomponent