@extends('layout.app')
@section('title')
    Formation profesionnelle BTP en Tunisie : brevet technicien Professionnel
@endsection
@section('metatitle')Inovatis - Formation profesionnelle BTP en Tunisie : brevet technicien Professionnel @endsection
@section('metadescription')Formation BTP en comptabilité et formalités douaniéres @endsection
@section('css')
    <style>
        .hover-change:hover{
            color: #fff !important;
            background-color: #1b2e51;
        }
    </style>
@endsection
@section('title')
    BTP
@endsection
@section('content')

    <!-- LE BTP - BREVET DE TECHNICIEN SUPÉRIEUR -->
    <section class="aboutus-skillls section-padding-large js-waypoint wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="section-title section-title-center">
                <h3>BTP- BREVET DE TECHNICIEN PROFESSIONNEL</h3>
            </div>
            <div class="our-skillls-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p class="desc">
                            Ce diplôme est au bout d’un parcours basé sur une expérience sur le terrain.
                            Un ‎BTP valide des connaissances pratiques dans des domaines spécifiques.
                            Des ‎techniciens expérimentés optent pour un BTP pour promouvoir leurs compétences ‎auprès de clients
                            et d’employeurs potentiels.‎
                        </p>
                        <br>
                        <h5>Conditions d’accès</h5>
                        <p class="desc">
                            Sont acceptés les titulaires du certificat d’aptitude professionnelle.
                            Egalement ceux ‎qui ont poursuivi leurs études jusqu’à la fin
                            de la deuxième année de ‎l’enseignement secondaire‎
                        </p>
                        <br>
                        <h5>Durée des études : 2 ans</h5>
                        <p class="desc">
                            Le BTP est livré après 2 ans de formation pour attester un niveau professionnel ‎réussissant
                            à la fois des examens théoriques et pratiques. Chaque examen mesure ‎le niveau des connaissances vérifiées
                            sur le terrain pour préparer les techniciens à ‎un métier.‎
                        </p>
                        <a class="btn btn-demande mb-2 mt-2" href="{{route('home')}}#contact">
                            Demandez le programme complet
                        </a>
                        <a href="{{route('preregistration')}}" class="btn btn-preinscription hover-change mb-2 mt-2">
                            Pré-inscription en ligne
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="{{asset('images/imageapropos1.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title section-title-center">
                <h3>Nos spécialités</h3>
                <p class="title-desc mt-2">
                    Afin d'identifier la spécialité qui correspond à son expérience, il est conseillé au ‎candidat de consulter la liste des BTP proposés et de se renseigner auprès du ‎bureau orientation.‎
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('images/bts/logistique.webp')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3>Formalités douanières</h3>
                                    <br>
                                    <p class="desc">
                                        Le rôle de la douane a particulièrement évolué ces dernières années.
                                        Outre son rôle économique et ses missions sécuritaires, elle exerce aussi une mission fiscale
                                        dont la réglementation, à l'import comme à l'export, ne s’applique qu’aux échanges avec les pays tiers.
                                        Les formalités de dédouanement et les procédures de déclaration en douane, soumises à des règles
                                        spécifiques mais néanmoins complexes, doivent être gérées avec exactitude.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('images/continues/comptabilité.webp')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3>Comptable d'entreprise</h3>
                                    <br>
                                    <p class="desc">
                                        Le technicien en comptabilité enregistre et traite des informations relatives aux mouvements financiers
                                        d’une entreprise ou d’un service. Il impute les opérations comptables et les enregistre sur des journaux
                                        divisionnaires informatisés ou sur papier. Il rend ainsi compte en termes monétaires de l’activité économique
                                        de l’entreprise vis-à-vis de la réglementation fiscale ou de la législation sociale
                                        du travail (tenue des journaux, des comptes d’exploitation, des livres de paie).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
