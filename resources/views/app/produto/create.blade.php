@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Adicionar - Produto</p>
        </div>
        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a>Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <div style="width: 30%; margin-left: auto;margin-right: auto">
                <form method="post" action="{{ route('produto.store') }}">
                    <input type="hidden" name="id">
                    @csrf
                    <input type="text" name="nome"  placeholder="Nome do Produto" class="borda-preta" />
                    <input type="text" name="descricao"  placeholder="Descrição do Produto" class="borda-preta" />
                    <input type="text" name="peso"  placeholder="Peso do Produto" class="borda-preta" />
                    <select name="unidade_id">
                        <option>-- Selecione a Unidade de Medida --</option>

                        @foreach($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
