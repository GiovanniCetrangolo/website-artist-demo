@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/gestione/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gestione/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gestione/progetti.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gestione/repertorio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gestione/prenotazioni.css') }}">
@endsection

@section('content')
<div class="contenitore-pagina admin-dashboard">

    <h1 class="titolo-principale">Pannello Admin</h1>

    <section class="blocco-gestione">
        <h2 class="titolo-sezione">Gestione Media</h2>

            @include('admin.media.partials.crea')

            @include('admin.media.partials.ordina')

        <div class="lista-elementi">
            @include('admin.media.partials.lista')
        </div>
    </section>

    <section class="blocco-gestione">
        <h2 class="titolo-sezione">Gestione Progetti</h2>

        @include('admin.progetto.partials.crea')

        <div class="lista-elementi">
            @include('admin.progetto.partials.lista')
        </div>
    </section>

    <section class="blocco-gestione">
        <h2 class="titolo-sezione">Gestione Repertorio</h2>

            @include('admin.repertorio.partials.crea')

        <div class="lista-elementi">
            @include('admin.repertorio.partials.lista')
        </div>
    </section>

   <div class="lista-elementi">
    @include('admin.prenotazioni.partials.lista')
</div>

</div>
@endsection
