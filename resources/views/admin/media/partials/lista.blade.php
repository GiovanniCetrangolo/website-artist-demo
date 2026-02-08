<h3 class="form-title">Foto e Video</h3>

<div class="media-lista">
@foreach($media as $item)
    <div class="media-item">
        @if($item->tipo === 'foto')
            <img src="{{ asset('storage/' . $item->percorso_foto) }}">
        @elseif($item->tipo === 'video')
            <iframe
                src="https://www.youtube.com/embed/{{ $item->youtube_id }}"
                frameborder="0"
                allowfullscreen>
            </iframe>
        @endif

        <form action="{{ route('admin.media.distruggi', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="danger" type="submit">Elimina</button>
        </form>
    </div>
@endforeach
</div>
