<div class="card-repertorio">

    <form
        class="form-admin-base form-repertorio"
        action="{{ route('admin.repertorio.aggiorna', $brano->id) }}"
        method="POST">

        @csrf
        @method('PUT')

        <div class="campo-repertorio">
            <label>Titolo</label>
            <input
                type="text"
                name="titolo"
                value="{{ $brano->titolo }}"
                required>
        </div>

        <div class="campo-repertorio">
            <label>Genere</label>
            <input
                type="text"
                name="genere"
                value="{{ $brano->genere }}"
                required>
        </div>

        <div class="campo-repertorio">
            <label>Note</label>
            <input
                type="text"
                name="note"
                value="{{ $brano->note }}">
        </div>

        <div class="campo-repertorio">
            <label>Ordine</label>
            <input
                type="number"
                name="ordine_index"
                value="{{ $brano->ordine_index }}">
        </div>

        <button type="submit" class="button-submit">
            Aggiorna
        </button>

    </form>

    <form
        class="form-elimina-repertorio"
        action="{{ route('admin.repertorio.distruggi', $brano->id) }}"
        method="POST">

        @csrf
        @method('DELETE')

        <button type="submit" class="button-danger">
            Elimina
        </button>

    </form>

</div>