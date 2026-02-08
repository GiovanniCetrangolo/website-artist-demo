<h3 class="form-title">Aggiungi nuovo progetto</h3>

<form class="form-admin" action="{{ route('admin.progetto.crea') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="campo">
        <label>Titolo</label>
        <input type="text" name="titolo" required>
    </div>

    <div class="campo">
        <label>Descrizione</label>
        <textarea name="descrizione"></textarea>
    </div>

    <div class="campo">
        <label>Immagine</label>
        <input type="file" name="immagine">
    </div>

    <button type="submit">Aggiungi</button>
</form>
