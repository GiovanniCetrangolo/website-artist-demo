<div class="login-container">
    
<form action="{{ route('login') }}" method="POST">
    @csrf

    <div class="email">
        <label for="email">Email:</label>
        <input type="email" name="email" required placeholder="Inserisci la tua email">
        @error('email')
            <div class="errore">{{ $message }}</div>
        @enderror
    </div>

    <div class="linea"></div>

    <div class="password">
        <label for="password">Password:</label>
        <input type="password" name="password" required placeholder="Inserisci la tua password">
        @error('password')
            <div class="errore">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="linea"></div>

    <div>
        <button class="submit" type="submit">Login</button>
    </div>
</form>

</div>
