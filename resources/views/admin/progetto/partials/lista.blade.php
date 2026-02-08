<h3 class="form-title">Elenco progetti</h3>

@if ($progetti->isEmpty())
    <p class="vuoto">Non ci sono progetti.</p>
@else
    @foreach ($progetti as $progetto)
        @include('admin.progetto.partials.aggiorna', ['progetto' => $progetto])
    @endforeach
@endif
