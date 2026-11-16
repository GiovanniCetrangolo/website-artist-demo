<h3 class="form-title">Crea nuovo media</h3>

<form class="form-admin-base form-colonna" action="{{ route('admin.media.aggiungi') }}" method="POST" enctype="multipart/form-data">
    @csrf

        <label>Tipo</label>
        <select name="tipo">
            <option value="foto">Foto</option>
            <option value="video">Video YouTube</option>
        </select>

        <label>File Foto</label>
        <input type="file" name="file">

        <label>YouTube ID</label>
        <input type="text" name="youtube_id" placeholder="es. dQw4w9WgXcQ">

    <button type="submit" class="button-submit">Aggiungi media</button>
</form>
