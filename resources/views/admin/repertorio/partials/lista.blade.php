<h3 class="form-title">Repertorio</h3>

@if ($repertorio->isEmpty())
    <p class="vuoto">Il repertorio è vuoto.</p>
@else
    @foreach ($repertorio as $brano)
        @include('admin.repertorio.partials.aggiorna', ['brano' => $brano])
    @endforeach
@endif
