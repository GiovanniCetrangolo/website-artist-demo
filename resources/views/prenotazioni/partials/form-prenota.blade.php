<form method="POST" action="{{ route('prenotazioni.invia') }}">
    @csrf

     <div class="griglia-form">

    <div class="campo-form">
        <input type="text" name="nome" placeholder="Nome e cognome" value="{{ old('nome') }}" required>
        @error('nome') <small class="errore">{{ $message }}</small> @enderror
    </div>

    <div class="campo-form">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        @error('email') <small class="errore">{{ $message }}</small> @enderror
    </div>

    <div class="campo-form campo-form-largo">
        <input type="date" name="data_evento" value="{{ old('data_evento') }}" required>
        @error('data_evento') <small class="errore">{{ $message }}</small> @enderror
    </div>

    <div class="campo-form campo-form-largo">
        <textarea name="messaggio" placeholder="Messaggio (facoltativo)">{{ old('messaggio') }}</textarea>
        @error('messaggio') <small class="errore">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="button-submit">Invia richiesta</button>
    
    </div>
</form>
