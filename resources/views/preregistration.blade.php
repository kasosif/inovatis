@extends('layout.app')
@section('title')
    Préinscription en ligne pour étudier en Tunisie
@endsection
@section('metatitle')Inovatis - Préinscription en ligne pour étudier en Tunisie @endsection
@section('metadescription')Vous voulez étudier en tunisie? Inovatis vous facilite la tache en vou donnant la possibilité de vous inscrire en ligne. @endsection
@section('css')
    <style>
        .hover-change:hover{
            color: #fff !important;
            background-color: #1b2e51;
        }
        @media only screen and (max-width: 768px) {
            #statusbtn {
                margin-top: 5px;
            }
        }
    </style>
@endsection

@section('content')

    <!-- FAQ -->
    <section class="section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h3>Vous voulez nous rejoindre</h3>
                <p class="desc">
                    C'est très simple , Il vous faudra environ 10 minutes pour compléter le formulaire de 5 étapes.
                </p>
            </div>
            <div class="courses-content">
                <div class="row mb-5">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <article class="item" style="border-color: #000;border-style: solid;height:205px">
                            <div class="item-thumb">
                                <div class="feadtured-course-small" style="left: 140px;width: 73px;height: 73px">
                                    <a href="#">
                                        <img src="{{asset('images/etape1.webp')}}" alt="Charles Russell">
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h3 class="title text-center">
                                    <span>Choix du programme</span>
                                </h3>
                                <p class="course-desc" style="text-align: center;" >
                                    Choisissez le programme qui correspond le mieux à votre niveau académique et à vos objectifs.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <article class="item" style="border-color: #000;border-style: solid;height:205px">
                            <div class="item-thumb">
                                <div class="feadtured-course-small" style="left: 140px;width: 73px;height: 73px">
                                    <a href="#">
                                        <img src="{{asset('images/etape2.webp')}}" alt="Charles Russell">
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h3 class="title text-center">
                                    <span>Informations de contact</span>
                                </h3>
                                <p class="course-desc" style="text-align: center;" >
                                    Partagez avec nous en toute sécurité vos informations, pour que nos conseiller peuvent revenir vers vous.
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <article class="item" style="border-color: #000;border-style: solid;height:205px">
                            <div class="item-thumb">
                                <div class="feadtured-course-small" style="left: 140px;width: 73px;height: 73px">
                                    <a href="#">
                                        <img src="{{asset('images/etape3.webp')}}" alt="Charles Russell">
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h3 class="title text-center">
                                    <span>Informations personnelles</span>
                                </h3>
                                <p class="course-desc" style="text-align: center;" >
                                    Parlez-nous de vous !
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <article class="item" style="border-color: #000;border-style: solid;height:205px">
                            <div class="item-thumb">
                                <div class="feadtured-course-small" style="left: 140px;width: 73px;height: 73px">
                                    <a href="#">
                                        <img src="{{asset('images/etape4.webp')}}" alt="Charles Russell">
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h3 class="title text-center">
                                    <span>Parcours scolaire</span>
                                </h3>
                                <p class="course-desc" style="text-align: center;" >
                                    Cela fait partie des points les plus importants lors du choix du programme
                                </p>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <article class="item" style="border-color: #000;border-style: solid;height:205px">
                            <div class="item-thumb">
                                <div class="feadtured-course-small" style="left: 140px;width: 73px;height: 73px">
                                    <a href="#">
                                        <img src="{{asset('images/etape5.webp')}}"  alt="Charles Russell">
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h3 class="title text-center">
                                    <span style="white-space: nowrap">Paiement frais d'admission</span>
                                </h3>
                                <p class="course-desc" style="text-align: center;" >
                                    Un paiement de confirmation est obligatoire pour confirmer votre demande.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row justify-content-center mb-3">
                    <a href="{{route('preinscription')}}" class="hover-change" style="font-size:12px;border-radius: 5px;padding: 16px;color: #000;border: groove #1b2e51;margin-left: 10px">
                        Commencer la pré-inscription
                    </a>
                </div>
                <div class="row justify-content-center">
                    <a href="{{route('reprendrepreinscription')}}" class="hover-change mr-3" style="font-size:12px;border-radius: 5px;padding: 16px;color: #000;border: groove #1b2e51;margin-left: 10px">
                        Reprendre une demande non finalisée
                    </a>
                    <a id="statusbtn" href="{{route('reprendrepreinscription')}}" style="font-size:12px;background-color: #1b2e51;border-radius: 5px;padding: 20px;color: #fff;">
                        Voir le statut de ma demande déjà effectué
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection
