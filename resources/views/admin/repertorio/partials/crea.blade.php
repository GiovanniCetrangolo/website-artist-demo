<div class="crea-repertorio">

    <h3 class="form-title">Aggiungi brano</h3>

    <form
        class="form-admin-base form-repertorio"
        action="{{ route('admin.repertorio.crea') }}"
        method="POST">

        @csrf

        <div class="campo-repertorio">
            <label>Titolo</label>
            <input type="text" name="titolo" required>
        </div>

        <div class="campo-repertorio">
            <label>Genere</label>
            <input type="text" name="genere" required>
        </div>

        <div class="campo-repertorio">
            <label>Note</label>
            <input type="text" name="note">
        </div>

        <div class="campo-repertorio">
            <label>Ordine</label>
            <input type="number" name="ordine_index" value="0">
        </div>

        <button type="submit" class="button-submit">
            Aggiungi
        </button>

    </form>

</div>