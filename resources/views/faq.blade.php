@extends('layout.app')
@section('title')
    Questions fréquentes
@endsection
@section('metatitle')Inovatis - Questions fréquentes @endsection
@section('metadescription')Inovatis - Questions fréquentes @endsection
@section('css')
    <style>
        [data-toggle="collapse"] .fa:before {
            content: "\f068";
        }

        [data-toggle="collapse"].collapsed .fa:before {
            content: "\f067";
        }
    </style>
@endsection
@section('title')
    FAQ
@endsection
@section('content')

    <!-- FAQ -->
    <section class="section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h3>FAQ</h3>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a style="color: inherit" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                UN BTS C’EST QUOI?
                                <span class="pull-right"><i class="fa-xs fa"></i></span>
                            </a>
                        </h4>

                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <p class="desc mt-2">
                                BTS est le sigle du Brevet de Technicien supérieur.
                            </p>
                            <p class="desc mt-2">
                                Il existe deux catégories de programmes pouvant mener à un BTS :
                            </p>
                            <p class="desc mt-2">
                                - Avoir un BTP homologué dans le secteur de formation offert
                                <br>- Avoir le niveau baccalauréat ou équivalent (BTP homologué dans la spécialité choisie)
                            </p>
                        </div>
                    </div>
                    <hr style="margin-top: 1.5rem">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a style="color: inherit" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                QUEL SONT LES CONDITIONS D'ADMISSION D'UN BTS?
                                <span class="pull-right"><i class="fa-xs fa"></i></span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <p class="desc mt-2">
                                Afin d’obtenir son BTS, l’étudiant doit compléter toutes les matières du programme choisi avec un seuil de réussite de 60 %.
                            </p>
                        </div>
                    </div>
                    <hr style="margin-top: 1.5rem">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a style="color: inherit" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                QUEL SONT LES SESSIONS DISPONIBLES?
                                <span class="pull-right"><i class="fa-xs fa"></i></span>
                            </a>
                        </h4>

                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <p class="desc mt-2">
                                INNOVATIS est un établissement de formation professionnelle ouvert toute l'année.
                            </p>
                            <p class="desc mt-2">
                                Les programmes durent 2 années à raison de 4 sessions obligatoires :
                            </p>
                            <p class="desc mt-2">
                                -2 sessions pour la 1ère année
                                <br>-2 sessions pour la 2ème année
                            </p>
                        </div>
                    </div>
                    <hr style="margin-top: 1.5rem">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a style="color: inherit" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                UN BTP C'EST QUOI?
                                <span class="pull-right"><i class="fa-xs fa"></i></span>
                            </a>
                        </h4>

                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <p class="desc mt-2">
                                BTP est le sigle de Brevet de Technicien Professionnel.
                            </p>
                            <p class="desc mt-2">
                                Il existe deux catégories de programmes pouvant mener à un BTP :
                            </p>
                            <p class="desc mt-2">
                                - Avoir un CAP (Certificat d'Aptitude Professionnelle) homologué dans le secteur de formation offert
                                <br>- Avoir le niveau de deuxième année secondaire réussi (5e année secondaire ancien régime)
                            </p>
                        </div>
                    </div>
                    <hr style="margin-top: 1.5rem">
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a style="color: inherit" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                QUEL SONT LES CONDITIONS D'ADMISSION D'UN BTP?
                                <span class="pull-right"><i class="fa-xs fa"></i></span>
                            </a>
                        </h4>

                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                            <p class="desc mt-2">
                                Afin d’obtenir son BTP, l’étudiant doit compléter tous les matières du programme choisi avec un seuil de réussite de 60 %
                            </p>
                        </div>
                    </div>
                    <hr style="margin-top: 1.5rem">
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection
