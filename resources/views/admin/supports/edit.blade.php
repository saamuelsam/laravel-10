<h1>Dúvida {{ $listagem }}</h1>

<form action="{{ route('supports.update', $support->id) }}" method="post">
    @method('PUT')
    @csrf()
    <input type="text" placeholder="Assunto" name="subject" value=" {{ $support->subject }}">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>