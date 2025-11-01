<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark   fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('/images/logo_m2l.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            La maison des ligues de Lorraine
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Accueil</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nos ligues
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">La ligue de basket ball</a></li>
                        <li><a class="dropdown-item" href="#">La ligue de planche à voile</a></li>
                        <li><a class="dropdown-item" href="#">La ligue de tennis</a></li>
                        <li><a class="dropdown-item" href="#">La ligue de basket volley ball</a></li>
                        <li><a class="dropdown-item" href="#">La ligue de basket plongée</a></li>
                        <li><a class="dropdown-item" href="#">La ligue de basket bowling</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Plan des locaux</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('evenements') }}">Les événèment de ligues</a>
                </li>

                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ouvrages.index') }}">La bibliothèque</a>
                </li>
                @endauth
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Nous contacter</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">

                @auth

                <li class="nav-item ms-auto">
                    <a class="nav-link" href="{{ route('deconnexion') }}">Se déconnecter</a>
                </li>
                @endauth

                @guest
                <li class="nav-item ms-auto">
                    <a class="nav-link" href="{{ route('connexion') }}">Se connecter</a>
                </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>