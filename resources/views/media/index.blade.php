@extends('layouts.app')

@section('title', 'Media')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
@endsection

@section('content')
<div class="contenitore-pagina">

    <h1 class="titolo-principale">Media</h1>

    <section class="media-colonna">
        @forelse($media as $item)
            <div class="media-blocco">
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
            <p>Non ci sono media.</p>
        @endforelse
    </section>

</div>
@endsection

