<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Website Artista')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/53a724d75e.js" crossorigin="anonymous"></script>

    <script src="{{ asset('main.js') }}" defer></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/componenti/titoli.css') }}">
    <link rel="stylesheet" href="{{ asset('css/componenti/bottoni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/componenti/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/componenti/forms.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prenotazione.css') }}">
    @yield('head')
</head>

<body id="body">
    <header>
        <div class="linea-oro"></div>

        <nav class="navigazione-principale">
            <ul class="menu-principale">
                <li><a href="{{ route('home') }}">Homepage</a></li>
                <li><a href="{{ route('media.pubblico') }}">Media</a></li>
                <li><a href="{{ route('progetto.index') }}">Progetti</a></li>
                <li><a href="{{ route('repertorio.index') }}">Repertorio</a></li>
                <li><a href="#" id="open-prenota">Prenota</a></li>
                <li><a href="{{ route('admin.gestione') }}">Admin</a></li>
            </ul>

            <button class="hamburger" aria-label="Apri menu">
                ☰
            </button>
        </nav>
    </header>

    <main class="contenuto-pagina" id="contenuto-pagina">
        <div class="form-prenotazione" id="form-prenotazione">
            @include('prenotazioni.partials.form-prenota')
        </div>
        @yield('content')
    </main>

    <footer class="footer">
        <p>
            <a href="mailto:artist@example.com"><i class="fa-solid fa-at"></i> artist@example.com</a>
            <a href="" target="_blank" rel="noopener"><i class="fa-brands fa-instagram"></i></a>
            <a href="" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin"></i></a>
        </p>
    </footer>

</body>

</html>