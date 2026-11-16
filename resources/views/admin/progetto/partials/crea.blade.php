<h3 class="form-title">Aggiungi nuovo progetto</h3>

<form class="form-admin-base form-progetti" action="{{ route('admin.progetto.crea') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <label>Titolo</label>
        <input type="text" name="titolo" required>
        
        <label>Descrizione</label>
        <textarea name="descrizione"></textarea>
       
        <label>Immagine</label>
        <input type="file" name="immagine">

    <button type="submit" class="button-submit">Aggiungi</button>
</form>
