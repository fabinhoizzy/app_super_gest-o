{{$slot}}
{{$classe}}
<form method="post" action={{ route('site.contato') }}>
    @csrf
    <label>
        <input type="text" name="nome" placeholder="Nome" class="{{$classe}}">
    </label>
    <br>
    <label>
        <input type="text" name="telefone" placeholder="Telefone" class="{{$classe}}">
    </label>
    <br>
    <label>
        <input type="text" name="email" placeholder="E-mail" class="{{$classe}}">
    </label>
    <br>
    <label>
        <select name="motivo_cantato" class="{{$classe}}">
            <option value="">Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
    </label>
    <br>
    <label>
        <textarea name="mensagem" class="{{$classe}}">Preencha aqui a sua mensagem</textarea>
    </label>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
