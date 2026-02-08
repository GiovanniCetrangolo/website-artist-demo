<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Violinista')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('head')
</head>
<body>


        <div class="linea-oro"></div>

        <nav class="navigazione-principale">
            <ul class="menu-principale">
                <li><a href="{{ route('home') }}">Homepage</a></li>
                <li><a href="{{ route('media.pubblico') }}">Media</a></li>
                <li><a href="{{ route('progetto.index') }}">Progetti</a></li>
                 <li><a href="{{ route('repertorio.index') }}">Repertorio</a></li>
                 <li><a href="{{ route('prenotazioni.prenota') }}">Prenota</a></li>
                <li><a href="{{ route('admin.gestione') }}">Admin</a></li>
            </ul>
        </nav>
    </header>

    <main class="contenuto-pagina">
        @yield('content')
    </main>
 
  <footer class="footer">
    <p><span class="label">✉️ Email:</span> <a href="mailto:isk.uckan@gmail.com">isk.uckan@gmail.com</a> <span class="label"> <span class="label"> 📞 Telefono:</span> <span class="cellulare">+39 1111111111</span> <span class="label">📷 Instagram:</span> <a href="https://instagram.com/isk.violinist" target="_blank" rel="noopener">isk.violinist</a></p>
</footer>

</body>
</html>
