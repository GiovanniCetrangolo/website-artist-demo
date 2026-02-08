@extends('layouts.app')

@section('title', 'Prenota')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/prenotazione.css') }}">
@endsection

@section('content')
<div class="contenitore-pagina-prenota">

    <h1 class="titolo-principale">Prenota un evento</h1>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

   <div class="form-prenotazione"> 
    @include('prenotazioni.partials.form-prenota')
   </div>

</div>
@endsection
