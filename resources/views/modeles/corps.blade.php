<!DOCTYPE html>
<html lang="fr-FR">

<head>
    @include('modeles.entete')
</head>

<body>
    @include('modeles.menu')


    @if (isset($isWelcome) && $isWelcome) <!-- Vérifie si la variable isWelcome est définie et vraie -->
    <div class="container-fluid">
        <div class="row gradient-bg align-items-center justify-content-center"> <!-- Centrer le contenu -->
            <div class="col text-center"> <!-- Colonne pour le texte -->
                <img src="{{asset('images/header-ligue.png')}}" alt="sport">
            </div>

        </div>
    </div>
    @endif

    <!-- container -->
    <div class="container" style="padding-top: 100px; padding-bottom: 60px">
        <!-- Content -->
        @yield('content')
    </div>
    @include('modeles.pied')
</body>

</html>