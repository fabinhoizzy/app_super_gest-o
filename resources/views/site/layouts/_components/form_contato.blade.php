{{$slot}}
{{$classe}}
<form method="post" action={{ route('site.contato') }}>
    @csrf
    <label>
        <input type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome" class="{{$classe}}">
    </label>
    <br>
    <label>
        <input type="text" value="{{ old('telefone') }}" name="telefone" placeholder="Telefone" class="{{$classe}}">
    </label>
    <br>
    <label>
        <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail" class="{{$classe}}">
    </label>
    <br>
    <label>
        <select name="motivo_contato" class="{{$classe}}">
            <option value="">Qual o motivo do contato?</option>
            @foreach($motivo_contatos as $key => $motivo_contato)
                <option value="{{$motivo_contato->id}}" {{ old('$motivo_contato') == $motivo_contato->id ? 'selected' : '' }}>{{$motivo_contato->motivo_contato}}</option>
            @endforeach
        </select>
    </label>
    <br>
    <label>
        <textarea name="mensagem" class="{{$classe}}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    </label>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
