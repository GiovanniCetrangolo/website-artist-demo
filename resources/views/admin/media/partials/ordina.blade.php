<h3 class="form-title">Ordina media</h3>

<form class="form-admin-base form-wrap" action="{{ route('admin.media.ordina') }}" method="POST">
    @csrf

    @foreach ($media as $m)
        <div class="card-admin ordina-media-item">
            <label>Media #{{ $m->id }}</label>
            
            @if($m->tipo === 'foto')
                <img src="{{ asset('storage/' . $m->percorso_foto) }}" class="miniatura">
            @elseif($m->tipo === 'video')
                <iframe
                    src="https://www.youtube.com/embed/{{ $m->youtube_id }}"
                    frameborder="0"
                    allowfullscreen
                    class="miniatura-video">
                </iframe>
            @endif

            <input type="number" name="ordini[{{ $m->id }}]" value="{{ $m->ordine }}">
        </div>
    @endforeach

    <button type="submit" class="button-submit">Salva ordine</button>
</form>
