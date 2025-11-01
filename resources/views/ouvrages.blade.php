@extends('modeles/corps')

<!-- Commence ici le corps de la page -->
@section('content')


<!-- Content -->


<div class="d-flex justify-content-center mb-5 flex-wrap">
  <button onclick="miseAJourDesLiens(this)" class="btn btn-warning me-2 mb-2 disabled">Tous</button>
  <button onclick="miseAJourDesLiens(this);" class="btn btn-warning me-2 mb-2">Poésie</button>
  <button onclick="miseAJourDesLiens(this);" class="btn btn-warning me-2 mb-2">Théâtre</button>
  <button onclick="miseAJourDesLiens(this);" class="btn btn-warning me-2 mb-2">Essai</button>
  <button onclick="miseAJourDesLiens(this);" class="btn btn-warning me-2 mb-2">Conte</button>
  <button onclick="miseAJourDesLiens(this);" class="btn btn-warning me-2 mb-2">Roman</button>
</div>

<div class="d-flex justify-content-center mb-5 flex-wrap">
  <h6><span id="badge_nombre" class="badge text-bg-secondary">{{$nbLivres}}</span> ouvrages.</h6>
</div>

<div id="les_livres" class="row">
  @foreach ($leslivres as $livre)

  <div class="col-md-3 d-flex">
    <div class="card  mb-4 flex-fill card-options">
      <img src="{{asset('images/couvertures/livre.png')}}" class="card-img-top custom-card-image" alt="{{$livre->titre}}" title="{{$livre->titre}}" />

      <div class="card-body card-fond-sombre">
        <h5 class="card-title card-titre-jaune">{{$livre->titre}}</h5>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
  </div>


  @endforeach



</div>


<!-- termine le corps de la page -->
@endsection