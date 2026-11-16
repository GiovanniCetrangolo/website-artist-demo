@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="contenitore-pagina">

    <h1 class="titolo-principale">Nome Artista</h1>

    <p class="descrizione">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nulla beatae animi ipsa laborum. Quaerat, aliquam possimus? <br>
        Repellendus dolore, sed nostrum blanditiis cumque deleniti debitis suscipit minima magnam praesentium sit.<br>
    </p>

    <section class="colonna-media">
        @forelse($media as $item)
        <div>
            @if($item->tipo === 'foto')
            <img src="{{ asset('storage/' . $item->percorso_foto) }}" alt="Foto artista">
            @elseif($item->tipo === 'video')
            <iframe
                src="https://www.youtube.com/embed/{{ $item->youtube_id }}"
                frameborder="0"
                allowfullscreen
                title="Video dell'artista">
            </iframe>
            @endif
        </div>
        @empty
        <p>Nessun media disponibile.</p>
        @endforelse
    </section>

</div>
@endsection