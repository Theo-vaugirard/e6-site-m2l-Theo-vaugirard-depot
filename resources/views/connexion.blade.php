@extends('modeles/corps')
@section('content')

<div class="content">

    <div class="container d-flex justify-content-center align-items-center">
        <div class="form-container">
            <h2 class="text-center">Connexion</h2>
            <form method="POST" action="{{ route('login.authenticate') }}">
                @csrf

                <div class=" mt-3 form-group">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>


                <button type="submit" class=" mt-3 btn btn-custom btn-block">Se connecter</button>
                <div class="text-center mt-3">
                    <a href="{{-- route('password.request') --}}">Mot de passe oublié ?</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection