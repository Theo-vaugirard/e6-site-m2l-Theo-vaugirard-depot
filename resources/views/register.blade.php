@extends('modeles.corps')

@section('content')

<div class="content">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="form-container">

            <h2 class="text-center">Créer un compte</h2>

            {{-- Affichage des erreurs --}}
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register.submit') }}">
                @csrf

                <div class="mt-3 form-group">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label>Adresse e-mail</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <label>Confirmer le mot de passe</label>
                    <input type="password" class="form-control" name="password_confirmation" required>
                </div>

                <button type="submit" class="mt-3 btn btn-custom btn-block">
                    S'inscrire
                </button>

                <div class="text-center mt-3">
                    <a href="{{ route('connexion') }}">Déjà un compte ? Se connecter</a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection