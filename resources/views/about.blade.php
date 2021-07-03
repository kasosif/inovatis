@extends('layout.app')
@section('title')
    Institut de formation professionnelle en Tunisie
@endsection
@section('metatitle')Inovatis - Institut de formation professionnelle en Tunisie @endsection
@section('metadescription')L'une des meilleurs écoles dans la formation professionnelle qui offre des formations de qualité. @endsection
@section('css')
    <style>
        #image-apropos1 {
            margin-left: 115px;
        }
        #image-apropos2 {
            margin-top: -140px;
        }
        @media screen and (max-width: 750px) {
            #image-apropos1 {
                display: none;
            }
            #image-apropos2 {
                display: none;
            }
        }
    </style>
@endsection
@section('title')
    A propos de Innovatis
@endsection
@section('content')

    <!-- A propos de Inovatis -->
    <section class="aboutus-skillls section-padding-large js-waypoint wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="our-skillls-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="{{asset('images/mainsliderpic.webp')}}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2 class="title">A propos de Inovatis</h2>
                        <hr>
                        <p class="desc">
                            INOVATIS a vu le jour en 2013 procurant une ouverture au monde professionnel.
                            L’accès à cet univers ‎professionnel se réalise en choisissant l’un de nos
                            programmes de formation professionnelle proposés. ‎Ces parcours permettent
                            aux apprenants d’accéder immédiatement aux domaines les plus demandés.
                            ‎Nous visons l'excellence académique pour être perpétuellement classé au
                            premier rang en Tunisie.‎ Situés en plein cœur de la ville, nos étudiants y
                            découvrent l'effervescence de la vie estudiantine ‎multiculturelle et dynamique.
                        </p>
                        <br>
                        <a href="#" id="toggleabout" style="font-size:16px;text-decoration: underline;color: inherit">
                            <i class="fa fa-chevron-down"></i> Lire La suite
                        </a>
                        <div id="togglableabout1" style="display: none">
                            <p>
                                Aujourd'hui, nos diplômés comptent parmi les jeunes cadres dynamiques de
                                plusieurs entreprises. Certains d'entre eux ont choisi de poursuivre leurs études
                                ou se lancer directement dans le monde professionnel.
                            </p>
                            <br>
                            <h6 class="title">DES FORMATIONS ACCÉLÉRÉES, INTENSES ET DE QUALITÉ</h6>
                        </div>
                    </div>
                </div>
                <div class="row mt-4" id="togglableabout2" style="display: none">
                    <div class="col-md-12">
                        <p>
                            Afin d'offrir un contexte d'apprentissage flexible, Inovatis offre plusieurs types de formation :
                        </p>
                    </div>
                    <div class="col-md-12">
                        <ul>
                            <li>Formation de deux ans</li>
                            <li>Formation spécialisée variant de 2 à 6 mois</li>
                        </ul>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Vous voulez nous rejoindre ? -->
    <section class="sign-up section-padding-large">
        <div class="container">
            <div class="sign-up-content">
                <div class="row">
                    <div class="col-md-8 mt-lg-5 mt-md-5">
                        <h2 class="title">
                            Vous voulez nous rejoindre ?
                        </h2>
                        <p>Votre futur commence ici. Cliquez sur le bouton ci-dessous pour vous lancer dans la procédure de pré-inscription.</p>
                        <br>
                        <a href="{{route('preregistration')}}" style="font-size:12px;background-color: #1b2e51;border-radius: 5px;padding: 16px;color: #fff;">
                            Pré-inscription en ligne
                        </a>
                    </div>
                    <div class="col-md-4">
                        <img id="image-apropos1" class="img-thumbnail" src="{{asset('images/imageapropos1.webp')}}" alt="">
                        <img id="image-apropos2" class="img-thumbnail" src="{{asset('images/mainsliderpic.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        $(document).on('click','#toggleabout',function(e) {
            e.preventDefault();
            var node1 = $('#togglableabout1');
            var node2 = $('#togglableabout2');
            if (node1.css('display') === "none") {
                node1.css('display','block');
                node2.css('display','block');
                $(this).remove();
                node2.append('<a href="#" id="toggleabout" style="font-size:16px;text-decoration: underline;color: inherit">\n' +
                    '                            <i class="fa fa-chevron-up"></i> Masquer\n' +
                    '                        </a>')
            }else{
                node1.css('display','none');
                node2.css('display','none');
                $(this).remove();
                node1.parent().append('<a href="#" id="toggleabout" style="font-size:16px;text-decoration: underline;color: inherit">\n' +
                    '                            <i class="fa fa-chevron-down"></i> Lire La suite ' +
                    '                        </a>');
            }
        });
    </script>
@endsection
