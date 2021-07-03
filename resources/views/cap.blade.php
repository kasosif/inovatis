@extends('layout.app')
@section('title')
    Formation CAP en Tunisie : CERTIFICAT D'APTITUDE PROFESSIONNELLE
@endsection
@section('metatitle')Inovatis - Formation CAP en Tunisie : CERTIFICAT D'APTITUDE PROFESSIONNELLE @endsection
@section('metadescription')Inovatis - Formation CAP en Tunisie : CERTIFICAT D'APTITUDE PROFESSIONNELLE @endsection
@section('css')
    <style>
        .hover-change:hover{
            color: #fff !important;
            background-color: #1b2e51;
        }
    </style>
@endsection
@section('title')
    CAP
@endsection
@section('content')

    <!-- LE BTS - BREVET DE TECHNICIEN SUPÉRIEUR -->
    <section class="aboutus-skillls section-padding-large js-waypoint wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <p class="alert alert-danger">
                Selon le décret-loi du ---/ --- du ministre de la formation professionnelle et de l'emploi. Le CAP ne fait plus partie des diplômes homologué par
                l'état. Cependant, vu la valeur du cursus, nous tenant à garder le programme du CAP comme formation dont le diplôme est non homologué.
            </p>
            <div class="section-title section-title-center mt-2">
                <h3>LE CAP - CERTIFICAT D'APTITUDE PROFESSIONNELLE</h3>
            </div>
            <div class="our-skillls-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p class="desc">
                            Le certificat d’aptitude professionnelle (CAP) est une mesure objective des connaissances, ‎des compétences
                            et des aptitudes requises dans un domaine. Plus précisément, le diplôme ‎est un justificatif fourni pour évaluer
                            et attester la performance d’un professionnel. ‎‎
                        </p>
                        <br>
                        <h5>Conditions d’accès</h5>
                        <p class="desc">
                            Sont acceptés les candidats qui ont poursuivi leurs études jusqu’à la fin de la ‎neuvième année de l’enseignement de base (préparatoire, technique et général).‎
                        </p>
                        <br>
                        <h5>Durée des études : 1 an</h5>
                        <p class="desc">
                            L'obtention de la certification CAP est un moyen éprouvé de bâtir votre carrière et de ‎démontrer votre expertise. Un CAP prouve aux employeurs que vous avez les compétences ‎techniques et les connaissances avancées nécessaires pour gérer votre métier. ‎
                        </p>
                        <a class="btn btn-demande mb-2 mt-2" href="{{route('home')}}#contact">
                            Demandez le programme complet
                        </a>
                        <a href="{{route('preregistration')}}" class="btn btn-preinscription hover-change mb-2 mt-2">
                            Pré-inscription en ligne
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="{{asset('images/cap/cap.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection
