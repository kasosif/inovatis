@extends('layout.app')
@section('title')
    Formation profesionnelle BTS en Tunisie : brevet technicien supérieur
@endsection
@section('metatitle')Inovatis - Formation profesionnelle BTS en Tunisie : brevet technicien supérieur @endsection
@section('metadescription')Formation BTS en commerce international , comptabilité , finance et logistique de distribution @endsection
@section('css')
    <style>
        .hover-change:hover{
            color: #fff !important;
            background-color: #1b2e51;
        }
    </style>
@endsection
@section('title')
    BTS
@endsection
@section('content')

    <!-- LE BTS - BREVET DE TECHNICIEN SUPÉRIEUR -->
    <section class="aboutus-skillls section-padding-large js-waypoint wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="section-title section-title-center">
                <h3>LE BTS - BREVET DE TECHNICIEN SUPÉRIEUR</h3>
            </div>
            <div class="our-skillls-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <p class="desc">
                            Les personnes qui souhaitent consolider leur expérience professionnelle peuvent ‎obtenir un BTS dans leur domaine.
                            C’est un parcours basé sur la pratique et ‎l’intégration dans un milieu du travail.
                            Le but est de former des étudiants ‎immédiatement opérationnels,
                            capables d’adhérer le domaine professionnel. ‎
                        </p>
                        <br>
                        <h5>Conditions d’admission</h5>
                        <p class="desc">
                            C’est un parcours permis aux titulaires du baccalauréat de l’enseignement ‎secondaire. Sont aussi admis, sous certaines
                            conditions, ceux titulaires du BTP ‎‎(Brevet de Technicien Supérieur).‎
                        </p>
                        <br>
                        <h5>Durée des études : 2 ans</h5>
                        <p class="desc">
                            Le BTS est un diplôme court de l’enseignement supérieur (2 années) et atteste de ‎l’obtention
                            d’une qualification professionnelle de haut niveau.‎
                        </p>
                        <a class="btn btn-demande mb-2 mt-2" href="{{route('home')}}#contact">
                            Demandez le programme complet
                        </a>
                        <a href="{{route('preregistration')}}" class="btn btn-preinscription hover-change mb-2 mt-2">
                            Pré-inscription en ligne
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="{{asset('images/bts/imagebts.webp')}}" alt="">
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
                    Afin d'identifier la spécialité qui correspond à son expérience, il est conseillé au ‎candidat de consulter la liste des BTS
                    proposés et de se renseigner auprès du ‎bureau orientation.‎
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('images/continues/commercial.webp')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h3>Commerce International</h3>
                                    <br>
                                    <p class="desc">
                                        Ce programme est conçu en fonction des besoins grandissants du milieu des affaires à l’ère de la mondialisation des marchés.
                                    </p>
                                    <br>
                                    <p class="desc">
                                        Il s’adresse aux personnes qui s’intéressent à la gestion et rêvent d’une carrière dynamique au niveau international.
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
                                    <h3>Comptabilité et finance</h3>
                                    <br>
                                    <p class="desc">
                                        Le monde de la comptabilité et de la finance offre une multitude d’emplois dynamiques et intéressants.
                                        Que ce soit dans le domaine de la comptabilité ou des services financiers, le diplômé
                                        de ce programme bénéficiera de compétences professionnelles lui permettant de vivre une carrière riche et prometteuse.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('images/bts/logistiquecropped.webp')}}" alt="" >
                                </div>
                                <div class="col-md-6">
                                    <h3>Logistique de distribution</h3>
                                    <br>
                                    <p class="desc">
                                        Conçu en fonction des besoins grandissants du milieu des affaires,
                                        ce programme s’adresse aux personnes qui portent un intérêt à la gestion du transport
                                        et souhaitent une carrière riche et dynamique, s’exerçant à l’échelle internationale.
                                        Le programme international Logistique de distribution, option Transport, forme des
                                        techniciens de premier niveau, autonomes, polyvalents et compétents dans leur domaine,
                                        capables de trouver des solutions concrètes et rentables pour pallier aux problèmes.
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
