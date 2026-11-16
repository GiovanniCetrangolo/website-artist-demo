@extends('layouts.app')

@section('title', 'Progetti')

@section('head')
<link rel="stylesheet" href="{{ asset('css/progetti.css') }}">
@endsection

@section('content')
<div class="contenitore-pagina">

    <h1 class="titolo-principale">Progetti</h1>

    @if ($progetti->isEmpty())
    <p class="vuoto">Non ci sono progetti.</p>
    @else
    <section class="colonna-progetti">
        @foreach ($progetti as $progetto)
        <article class="blocco-progetto">

            @if($progetto->immagine)
            <div class="contenitore-immagine"
                style="background-image: url('{{ asset('storage/'.$progetto->immagine) }}')">

                <div class="overlay-progetto">
                    <h2 class="titolo-progetto">{{ $progetto->titolo }}</h2>

                    <p class="descrizione-progetto">m
                        {{ $progetto->descrizione }}
                    </p>
                </div>

            </div>
            @else
            <div class="solo-testo">
                <h2 class="titolo-progetto">{{ $progetto->titolo }}</h2>
                <p class="descrizione-progetto">
                    {{ $progetto->descrizione }}
                </p>
            </div>
            @endif

        </article>
        @endforeach
    </section>
    @endif

</div>
@endsection