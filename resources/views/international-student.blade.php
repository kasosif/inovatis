@extends('layout.app')
@section('title')
    Ecole de formation pour etudiant international en Tunisie
@endsection
@section('metatitle')Inovatis - Ecole de formation pour etudiant international en Tunisie @endsection
@section('metadescription')Vous etes un étudiant de l'afrique subsaharienne, rejoignez nous pour améliorer votre avenir. @endsection
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
    Etudiant international
@endsection
@section('content')

    <!-- Etudiant international -->
    <section class="aboutus-skillls section-padding-large js-waypoint wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="section-title section-title-center">
                <img src="{{asset('images/internationalcropped.webp')}}" alt="" style="width: 100%">
            </div>
            <div class="section-title section-title-center mt-2">
                <h3>Etudiant International</h3>
                <p class="desc mt-5">
                    Nous sommes conscients que les élèves ayant connu un système d’éducation différent de celui de la Tunisie peuvent être confrontés à bon nombre de questions. C’est pourquoi nous mettons à votre disposition le maximum d’informations possibles afin de faciliter votre parcours.
                </p>
                <h5 class="mt-5" style="font-weight: bolder">RÉALISEZ VOUS!</h5>
                <p class="desc mt-2">
                    <b>Innovatis</b> connaît depuis 8 ans un réel succès à former des cohortes d'élite. Ses professeurs sont des gens du métier, passionnés et reconnus dans leur domaine respectif. Leur mandat est de fournir un enseignement de qualité qui répond aux besoins des élèves. Ces derniers seront préparés aux divers changements sociétaux ainsi qu’aux ajustements fréquents du marché de l'emploi.
                </p>
                <p class="desc mt-2">
                    Les diplômés de Inovatis acquièrent :
                </p>
                <p class="desc mt-2">
                    Un diplôme homologué par le gouvernement et reconnu internationalement
                    Une expérience authentique grâce à des contacts fréquents avec des professionnels de leur domaine d'études
                    Des compétences acquises en situation grâce à des stages
                    Un regard critique sur les questions internationales
                </p>
                <h5 class="mt-5" style="font-weight: bolder">COURS ET PROGRAMMES</h5>
                <p class="desc">
                    <b>Innovatis</b> offre plus de 7 programmes répondant aux besoins des étudiants et des industries. Il propose deux diplômes :
                </p>
                <p class="desc mt-2">
                    Brevet de technicien supérieur (BTS)
                    Brevet de technicien professionnel (BTP)
                </p>
                <p class="desc mt-5">
                    Nos programmes de formation professionnelle de deux ans conduisent à un BTS, ou à un BTP. Ces études préparent les élèves à une entrée directe sur le marché du travail. Ils seront habilités à exercer leur profession en tant que salariés ou en qualité de travailleurs autonomes. Ils leurs permettent aussi de poursuivre leurs études dans des universités locales ou étrangères.
                </p>
                <h5 class="mt-5" style="font-weight: bolder">CONDITIONS D’ADMISSION</h5>
                <p class="desc mt-3">
                    Brevet de Technicien Supérieur (BTS) :Satisfaire aux conditions d’admission à un BTS telles que fixées par le ministère de la Formation professionnelle et de l'Emploi (niveau bac ou équivalent).
                </p>
                <p class="desc mt-3">
                    Brevet de Technicien Professionnel (BTP) : Satisfaire aux conditions d’admission à un BTP telles que fixées par le ministère de la Formation Professionnelle et de l'Emploi (C.A.P ou 5e année accomplie).
                </p>
                <h5 class="mt-5" style="font-weight: bolder">
                    AVANT D’APPLIQUER À UN DE NOS PROGRAMMES, NOUS VOUS RECOMMANDONS FORTEMENT DE PRENDRE CONNAISSANCE DES INFORMATIONS SUIVANTES :
                </h5>
                <p class="desc mt-2">
                    Se familiariser avec Innovatis
                    Vivre à Tunis
                    Préparer ses études
                    Préparer son arrivée
                    Hébergement
                </p>
                <h5 class="mt-5" style="font-weight: bolder">FINANCES</h5>
                <p class="desc">
                    Informations requises pour le transfert bancaire pour les étudiants internationaux :
                </p>
                <p class="desc mt-2">
                    Banque internationale arabe de Tunisie Agence Mohamed V
                </p>
                <p class="desc mt-2">
                    Bénéficiaire : Innovatis Formation
                </p>
                <p class="desc mt-2">
                    Numéro de compte : 08307000591001591778
                </p>
                <p class="desc mt-2">
                    Code SWIFT: BIATTNTT
                </p>
                <p class="desc mt-2">
                    Code IBAN: TN59
                </p>
                <p class="desc mt-5">
                    * Tout règlement acquitté ne fera l'objet d'aucun remboursement, conformément aux conditions de règlement des frais de scolarité pour cause d’annulation d’inscription, d’entrée tardive, d’absence, de maladie, de départ volontaire ou d’exclusion.
                </p>
                <p class="desc mt-2">
                    Nous suivre:
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
