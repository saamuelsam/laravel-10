<h1>Nova Dúvida</h1>
<form action="{{ route('supports.store' ) }}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"  style="resize: none";></textarea>
    <button type="submit">Enviar</button>
</form><!-- a -->   