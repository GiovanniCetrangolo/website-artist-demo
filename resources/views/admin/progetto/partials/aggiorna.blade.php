<div class="item-admin">
    <form class="form-admin" action="{{ route('admin.progetto.aggiorna', $progetto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="campo">
            <label>Titolo</label>
            <input type="text" name="titolo" value="{{ $progetto->titolo }}">
        </div>

        <div class="campo">
            <label>Descrizione</label>
            <textarea name="descrizione">{{ $progetto->descrizione }}</textarea>
        </div>

        <button type="submit">Aggiorna</button>
    </form>

    <form action="{{ route('admin.progetto.distruggi', $progetto->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="danger" type="submit">Elimina</button>
    </form>
</div>
