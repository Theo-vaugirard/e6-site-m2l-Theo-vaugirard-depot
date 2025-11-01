@extends('modeles/corps')
@section('content')

<div class="content">

    <div class="row">
        <div class="col border border-2 mx-2">

            <h2> <i class="fa-solid fa-location-dot"></i>Adresse</h2>
            <p class="ps-5">Adresse de la maison des ligues</p>
            <p class="ps-5">Complément</p>

        </div>

        <div class="col border border-2 mx-2">

            <h2> <i class="fa-solid fa-envelope-open"></i></i>E-mail</h2>
            <p class="ps-5">contact@m2l.com</p>
            <p class="ps-5">secretariat@m2l.com </p>

        </div>

        <div class="col border border-2 mx-2">

            <h2> <i class="fa-solid fa-envelope-open"></i></i>Téléphone</h2>
            <p class="ps-5 text-danger">Infoline: 0800 4521 800 50</p>
            <p class="ps-5">Secrétariat: 0798 6546 465 15 </p>

        </div>
    </div>

    <div class="row">
        <div class="col border border-2 mx-2 my-5 pt-2 pb-2">

            <h2> <i class="fa-solid fa-clock-rotate-left"></i></i>Horaires d'ouverture</h2>

            <div class="row w-50 mx-auto mt-5">
                <div class="col">Lundi</div>
                <div class="col">8h-18h</div>
            </div>
            <div class="row w-50 mx-auto">
                <div class="col">Mardi</div>
                <div class="col">8h-18h</div>
            </div>
            <div class="row w-50 mx-auto">
                <div class="col">Mercredi</div>
                <div class="col">8h-18h</div>
            </div>
            <div class="row w-50 mx-auto">
                <div class="col">Jeudi</div>
                <div class="col">8h-18h</div>
            </div>
            <div class="row w-50 mx-auto">
                <div class="col">Vendredi</div>
                <div class="col">8h-14h</div>
            </div>
            <div class="row w-50 mx-auto">
                <div class="col">Samedi</div>
                <div class="col">8h-14h</div>
            </div>
            <div class="row w-50 mx-auto">
                <div class="col">Dimanche</div>
                <div class="col">Fermé</div>
            </div>

        </div>



        <div class="row">
            <div class="col">

                <h2 class="pb-4"> <i class="fa-regular fa-comment-dots"></i></i>Laissez un message</h2>

                <form name="contact_form" method="POST" action="">
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-1">
                            <label for="adresse_mail"> E-mail</label>
                        </div>
                        <div class="col">
                            <input class="w-50" name="adresse_mail" type="email" />
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-1">
                            <label for="message">Message</label>
                        </div>
                        <div class="col">
                            <input class="w-50" name="message" type="text" />
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-1">
                        </div>
                        <div class="col">
                            <input class="btn btn-warning w-50" type="submit" value="Sauvegarder" />
                        </div>
                    </div>

                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />

                </form>
            </div>
        </div>
    </div>


</div>

@endsection