<h1>TESTE DO INDEX ROTA DE SUPORTE</h1>

<a href="{{ route('supports.create') }}">Criar dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>

    <tbody>
        @for($i = 0; $i <= count($supports)-1; $i++)
            <tr>
                <td>{{ $supports[$i]->subject}}</td>
                <td>{{ $supports[$i]->status}}</td>
                <td>{{ $supports[$i]->body }}</td>
                 <td>
                    <a href="{{ route('supports.show',['id' => $supports[$i]->id, 'listagem' => $i+1 ] )}}">Ir</a>
x                    <a href="{{ route('supports.edit', ['id' => $supports[$i]->id, 'listagem' => $i+1 ])}}">Editar</a>
                </td>

            </tr>
        @endfor
    </tbody>
</table>

