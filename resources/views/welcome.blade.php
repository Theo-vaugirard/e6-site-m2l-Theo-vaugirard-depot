@extends('modeles/corps')
@section('content')

<div class="content">
    <div class="container-fluid ">
        @guest
        <h1>Membres des ligues</h1>

        <p>
            Cliquez sur le bouton ci-dessous pour vous connecter.

        </p>
        <a href="{{route('connexion')}}" class="btn btn-custom btn-lg">Se connecter</a>
        @endguest

        @auth
        <p>Bienvenue, {{ Auth::user()->name }} ! Vous êtes connecté.</p>
        @endauth


        <hr>
        Test de l'api pour la table ouvrages
        <br>
        <hr>
        <div class="d-flex justify-content-left mb-5 flex-wrap">
            <button onclick="ajouterOuvrage()" class="btn btn-primary me-2 mb-2">Créer un ouvrage</button>
            <button onclick="supprimerOuvrage()" class="btn btn-danger me-2 mb-2">Supprimer un ouvrage</button>
            <button onclick="modifierOuvrage()" class="btn btn-warning me-2 mb-2">Modifier un ouvrage</button>
            <button onclick="voirUnOuvrage()" class="btn btn-info me-2 mb-2">Voir un ouvrage</button>
            <button onclick="voirTousLesOuvrages()" class="btn btn-info me-2 mb-2">Voir tous les ouvrages</button>
        
        </div>

    </div>

</div>

@endsection