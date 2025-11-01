@extends('modeles/corps')
@section('content')

<div class="content">
  <!-- Commence ici le corps de la page -->

  <div class="row">
    <h2>Premier</h2>
    <hr class="break-small background-primary margin-bottom-30">
  </div>

  <div class="row">
    <div class="col-4">
      <img src="{{ asset('/images/evenements/eve1.jpg') }}" alt="affiche" width="50%">
    </div>
    <div class="col">
      <p class="text-justify">
        Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam;
        est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
        Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc
        putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc
        nobis videntur parum clari, fiant sollemnes in futurum.
      </p>
    </div>

  </div>
</div>
</div>

<!-- termine le corps de la page -->
</div>

@endsection