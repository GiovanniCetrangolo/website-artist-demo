<div class="item-admin">
    <form class="form-admin" action="{{ route('admin.repertorio.aggiorna', $brano->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="campo">
            <label>Titolo</label>
            <input type="text" name="titolo" value="{{ $brano->titolo }}">
        </div>

        <div class="campo">
            <label>Genere</label>
            <input type="text" name="genere" value="{{ $brano->genere }}">
        </div>

        <div class="campo">
            <label>Note</label>
            <input type="text" name="note" value="{{ $brano->note }}">
        </div>

        <div class="campo">
            <label>Ordine</label>
            <input type="number" name="ordine_index" value="{{ $brano->ordine_index }}">
        </div>

        <button type="submit">Aggiorna</button>
    </form>

    <form action="{{ route('admin.repertorio.distruggi', $brano->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="danger" type="submit">Elimina</button>
    </form>
</div>
