<table class="tabella-admin">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Data Evento</th>
            <th>Messaggio</th>
            <th>Azioni</th>
        </tr>
    </thead>

    <tbody>
        @foreach($prenotazioni as $p)
        <tr>
            <td>{{ $p->nome }}</td>
            <td>{{ $p->email }}</td>
            <td>{{ $p->data_evento }}</td>
            <td>{{ Str::limit($p->messaggio, 50) }}</td>
            <td>
                <form method="POST" action="{{ route('prenotazioni.elimina', $p->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
