<h3 class="form-title">Crea nuovo media</h3>

<form class="form-admin" action="{{ route('admin.media.aggiungi') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="campo">
        <label>Tipo</label>
        <select name="tipo">
            <option value="foto">Foto</option>
            <option value="video">Video YouTube</option>
        </select>
    </div>

    <div class="campo">
        <label>File Foto</label>
        <input type="file" name="file">
    </div>

    <div class="campo">
        <label>YouTube ID</label>
        <input type="text" name="youtube_id" placeholder="es. dQw4w9WgXcQ">
    </div>

    <button type="submit">Aggiungi media</button>
</form>
