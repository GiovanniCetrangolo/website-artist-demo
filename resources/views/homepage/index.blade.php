@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="contenitore-pagina">

    <h1 class="titolo-principale">Isik Uckan</h1>

    <p class="descrizione">
        🎻Violino elettrico e acustico. <br>
        Violinista per eventi, matrimoni e spettacoli. <br>
        Unisce eleganza classica ed energia moderna in ogni performance. <br>
        </p>

    <section class="colonna-media">
        @forelse($media as $item)
            <div>
                @if($item->tipo === 'foto')
                    <img src="{{ asset('storage/' . $item->percorso_foto) }}">
                @elseif($item->tipo === 'video')
                    <iframe
                        src="https://www.youtube.com/embed/{{ $item->youtube_id }}"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                @endif
            </div>
        @empty
            <p>Nessun media disponibile.</p>
        @endforelse
    </section>

</div>
@endsection
