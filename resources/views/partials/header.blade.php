<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.index') }}">Tutti i Fumetti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('comics.create') }}">Creazione nuovo fumetto</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
