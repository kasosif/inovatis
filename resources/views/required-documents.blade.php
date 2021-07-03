@extends('layout.app')
@section('title')
    Documents requis pour étudier en Tunisie
@endsection
@section('metatitle')Inovatis - Documents requis pour étudier en Tunisie @endsection
@section('metadescription')Pour étudier en Tunisie vous devez préparer votre dossier. Nous vous aidons tout au long de la procédure @endsection
@section('css')
    <style>
        ul.social-media-list {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        ul.social-media-list li {
            display: inline-block;
            margin: 2px;
        }
        ul.social-media-list img {
            padding: 5px;
            border-radius: 15px;
            background-color: lightgray;
            width: 36px;
            height: 36px;
        }
        ul.social-media-list img:hover {
            background-color: rgba(27, 46, 81, 0.5);
        }
    </style>
@endsection
@section('title')
    Documents requis
@endsection
@section('content')

    <!-- Etudiant international -->
    <section class="aboutus-skillls section-padding-large js-waypoint wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="section-title section-title-center">
                <img src="{{asset('images/documentsrequiscropped.webp')}}" alt="" width="100%">
            </div>
            <div class="section-title section-title-center mt-2">
                <h3>Documents Requis</h3>
                <h5 class="mt-5" style="font-weight: bolder">QUELS SONT LES DOCUMENTS REQUIS?</h5>
                <p class="desc mt-2">
                    Si vous désirez étudier en Tunisie, vous devez remplir une demande d'admission en ligne et nous envoyer les documents suivants.
                </p>
                <h5 class="mt-5" style="font-weight: bolder">Étudiants nationaux</h5>
                <p class="desc mt-3">
                    *CYCLE DE TECHNICIEN SUPÉRIEUR BTS (BACHELIERS OU ÉQUIVALENTS ET PLUS)
                    <br>Diplôme du Bac (2 copies)
                    <br>Bulletin cumulatif du Bac (2 copies)
                    <br>2 extraits de naissance (en français)
                    <br>4 photographies
                    <br>3 copies de la carte d’identité nationale
                    <br>Dossier médical
                </p>
                <p class="desc mt-3">
                    *CYCLE DE TECHNICIEN PROFESSIONNEL BTP (BAC, 6E, 5E ACCOMPLIES)
                    <br>Bulletin cumulatif de la terminale ou de la dernière année d’études
                    <br>Certificat de scolarité (si l’étudiant vient d’un établissement privé, il faut que ce document soit certifié par la direction régionale)
                    <br>2 extraits de naissance (en français)
                    <br>4 photographies
                    <br>3 copies de la carte d’identité nationale
                    <br>Dossier médical

                </p>
                <h5 class="mt-5" style="font-weight: bolder">Étudiants internationaux</h5>
                <p class="desc mt-3">
                    *CYCLE DE TECHNICIEN SUPÉRIEUR BTS (BACHELIERS OU ÉQUIVALENTS ET PLUS)
                    <br>Bulletin cumulatif du Bac (2 copies)
                    <br>Attestation d’équivalence de diplôme de Bac délivrée par l’ambassade du pays concerné à Tunis (à faire une fois sur place)
                    <br>2 extraits de naissance (en français)
                    <br>4 photographies
                    <br>2 copies du passeport
                    <br>Copie du visa si nécessaire
                </p>
                <p class="desc mt-3">
                    *CYCLE DE TECHNICIEN PROFESSIONNEL BTP (BAC, 6E, 5E ACCOMPLIES)
                    <br>Bulletin cumulatif de la terminale ou de la dernière année d’étude
                    <br>Attestation d’équivalence de niveau délivrée par l’ambassade du pays concerné à Tunis (à faire une fois sur place)
                    <br>2 extraits de naissance (en français)
                    <br>4 photographies
                    <br>2 copies du passeport
                    <br>Copie du visa si nécessaire
                </p>
                <p class="desc mt-5">
                    *Venez noter que tout règlement acquitté ne fera l'objet d'aucun remboursement, conformément aux conditions de règlement des frais de scolarité pour cause d’annulation d’inscription, d’entrée tardive, d’absence, de maladie, de départ volontaire ou d’exclusion.
                </p>
                <p class="desc mt-2">
                    Suivez nous :
                </p>
                <ul class="social-media-list">
                    <li><a href="http://www.linkedin.com"><img src="{{asset('images/icon/linkedin.svg')}}" alt="Linkedin" title="Linkedin"></a></li>
                    <li><a href="#"><img src="{{asset('images/icon/facebook.svg')}}" alt="Facebook" title="Facebook"></a></li>
                </ul>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection
