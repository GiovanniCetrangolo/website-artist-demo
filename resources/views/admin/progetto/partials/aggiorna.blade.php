<div class="card-admin progetto-item">

    <form class="form-admin-base form-progetti"action="{{ route('admin.progetto.aggiorna', $progetto->id) }}" method="POST">
        @csrf
        @method('PUT')

            <label>Titolo</label>
            <input type="text" name="titolo" value="{{ $progetto->titolo }}">

            <label>Descrizione</label>
            <textarea name="descrizione">{{ $progetto->descrizione }}</textarea>

        <button type="submit" class="button-submit">
            Aggiorna
        </button>
    </form>

    <form action="{{ route('admin.progetto.distruggi', $progetto->id) }}"
          method="POST">
        @csrf
        @method('DELETE')

        <button class="button-danger" type="submit">
            Elimina
        </button>
    </form>

</div>