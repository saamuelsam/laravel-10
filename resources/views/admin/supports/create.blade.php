<h1>Nova Dúvida</h1>

<form action="{{ route('supports.store' )}}" method="POST">
    <!-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> -->
    @csrf
    <input type="text" placeholder="Assunto" name="subject"> <!-- comentario no blade cntrl K C -->
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form> 