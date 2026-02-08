<h3 class="form-title">Aggiungi brano</h3>

<form class="form-admin" action="{{ route('admin.repertorio.crea') }}" method="POST">
    @csrf

    <div class="campo">
        <label>Titolo</label>
        <input type="text" name="titolo" required>
    </div>

    <div class="campo">
        <label>Genere</label>
        <input type="text" name="genere" required>
    </div>

    <div class="campo">
        <label>Note</label>
        <input type="text" name="note">
    </div>

    <div class="campo">
        <label>Ordine</label>
        <input type="number" name="ordine_index" value="0">
    </div>

    <button type="submit">Aggiungi</button>
</form>
v