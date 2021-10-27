@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')


<div class="conteudo-destaque">

    <div class="esquerda">
        <div class="informacoes">
            <h1>Sistema Super Gestão</h1>
            <p>Software para gestão empresarial ideal para sua empresa.
            <p>
            <div class="chamada">
                <img src="{{ asset('img/check.png') }}" alt="gestão completa e descomplicada">
                <span class="texto-branco">Gestão completa e descomplicada</span>
            </div>
            <div class="chamada">
                <img src="{{ asset('img/check.png') }}" alt="sua empresa na nuvem">
                <span class="texto-branco">Sua empresa na nuvem</span>
            </div>
        </div>

        <div class="video">
            <img src="{{ asset('img/player_video.jpg') }}" alt="video">
        </div>
    </div>

    <div class="direita">
        <div class="contato">
            <h1>Contato</h1>
            <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
            <p>
            <form>
                <label>
                    <input type="text" placeholder="Nome" class="borda-branca" alt="nome">
                </label>
                <br>
                <label>
                    <input type="text" placeholder="Telefone" class="borda-branca" alt="telefone">
                </label>
                <br>
                <label>
                    <input type="text" placeholder="E-mail" class="borda-branca" alt="email">
                </label>
                <br>
                <label>
                    <select class="borda-branca">
                        <option value="">Qual o motivo do contato?</option>
                        <option value="">Dúvida</option>
                        <option value="">Elogio</option>
                        <option value="">Reclamação</option>
                    </select>
                </label>
                <br>
                <label>
                    <textarea class="borda-branca">Preencha aqui a sua mensagem</textarea>
                </label>
                <br>
                <button type="submit" class="borda-branca">ENVIAR</button>
            </form>
        </div>
    </div>
</div>
@endsection
