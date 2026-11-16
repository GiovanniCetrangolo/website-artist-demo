<h2 class="titolo-sezione">Prenotazioni</h2>

<div class="lista-prenotazioni">

@foreach($prenotazioni as $p)
    <div class="card-prenotazione">

        <div class="card-header">
            <span class="card-nome">{{ $p->nome }}</span>
            <span class="card-data">{{ $p->data_evento }}</span>
        </div>

        <div class="card-body">
            <div class="campo">
                <span class="label">Email</span>
                <span class="valore">{{ $p->email }}</span>
            </div>

            <div class="campo">
                <span class="label">Messaggio</span>
                <p class="messaggio">
                    {{ $p->messaggio }}
                </p>
            </div>
        </div>

        <div class="card-footer">
            <form method="POST" action="{{ route('prenotazioni.elimina', $p->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="button-danger">
                    Elimina
                </button>
            </form>
        </div>

    </div>
@endforeach

</div>