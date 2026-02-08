@extends('layouts.app')

@section('title', 'Repertorio')

@section('head')
<link rel="stylesheet" href="{{ asset('css/repertorio.css') }}">
@endsection

@section('content')
<div class="contenitore-pagina repertorio">

    <h1 class="titolo-principale">Repertorio</h1>

    @forelse ($repertorio as $genere => $brani)
    <h2 class="titolo-genere">{{ $genere }}</h2>

    <ul class="lista-brani">
        @foreach ($brani as $brano)
            <li class="brano">
                <span class="icona-nota">♪</span>

                <span class="testo-brano">
                    <strong>{{ $brano->titolo }}</strong>
                    @if($brano->note)
                        – {{ $brano->note }}
                    @endif
                </span>
            </li>
        @endforeach
    </ul>
@empty

        <p class="vuoto">Il repertorio è vuoto.</p>
    @endforelse

</div>
@endsection
