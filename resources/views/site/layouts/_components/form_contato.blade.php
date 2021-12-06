{{$slot}}
{{$classe}}
<form method="post" action={{ route('site.contato') }}>
    @csrf
    <label>
        <input type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome" class="{{$classe}}">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    </label>
    <br>
    <label>
        <input type="text" value="{{ old('telefone') }}" name="telefone" placeholder="Telefone" class="{{$classe}}">
        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}

    </label>
    <br>
    <label>
        <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail" class="{{$classe}}">
        {{ $errors->has('email') ? $errors->first('email') : '' }}
    </label>
    <br>
    <label>
        <select name="motivo_contatos_id" class="{{$classe}}">
            <option value="">Qual o motivo do contato?</option>
            @foreach($motivo_contatos as $key => $motivo_contato)
                <option value="{{$motivo_contato->id}}" {{ old('$motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>{{$motivo_contato->motivo_contato}}</option>
            @endforeach
        </select>
        {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
    </label>
    <br>
    <label>
        <textarea name="mensagem" class="{{$classe}}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
        {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
    </label>
    <br>
    <button type="submit" class="{{$classe}}">ENVIAR</button>
</form>
