@extends('backoffice.layout')
@section('title') Ajouter une Demande @endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
@endsection
@section('demandesopen') menu-open @endsection
@section('displaydemandes') style="display:block;" @endsection
@section('ajoutdemandesactive') class="active" @endsection
@section('headtitle') Ajouter une Demande d'inscription @endsection
@section('breadcrumb')
    <li>
        <a href="{{route('backoffice.index')}}">
            <i class="fa fa-home"></i> Dashboard
        </a>
    </li>
    <li class="active" >
        <a href="{{route('backoffice.demande.ajout')}}">
            <i class="fa fa-files-o"></i> Ajouter une Demande
        </a>
    </li>
@endsection
@section('content')
    <div class="box">
        <div class="box-body">
            <div class="container-fluid">
                <div class="form-wizard">
                    <form action="{{route('backoffice.formation.store')}}" method="post" role="form" id="preregistration-form">
                        @csrf
                        <fieldset class="wizard-fieldset">
                            <legend>Informations de contact</legend>
                            <div class="form-group">
                                <label for="prenom" class="wizard-form-text-label">Prénom*</label>
                                <input type="text" class="form-control wizard-required" id="prenom" name="prenom">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <label for="nom" class="wizard-form-text-label">Nom*</label>
                                <input type="text" class="form-control wizard-required" id="nom" name="nom">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="wizard-form-text-label">Adresse Email*</label>
                                <input type="email" class="form-control wizard-required" id="email" name="email">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="wizard-form-text-label">N° de téléphone mobile*</label>
                                <input type="text" pattern="[0-9]{8}" class="form-control wizard-required" id="telephone" name="telephone">
                                <div class="wizard-form-error"></div>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <legend>Choix du programme</legend>
                            <div class="form-group">
                                <label for="session">Session*</label>
                                <select class="form-control wizard-required" id="session" name="session">
                                    <option value="" selected>Session</option>
                                    @foreach($sessions as $s)
                                        <option value="{{$s->name}}">{{$s->name}}</option>
                                    @endforeach
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <label for="type-formation">Formation*</label>
                                <select class="form-control wizard-required" id="type-formation" name="type_formation">
                                    <option value="" selected disabled>Formation</option>
                                    <option value="initiale">Formation Initiale</option>
                                    <option value="continue">Formation Continue</option>
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group js-formation-select">
                            </div>
                            <div class="form-group js-specialite-select">
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <legend>Informations personnelles</legend>
                            <div class="row">
                                <div class="col-12">Date de naissance</div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="jour">Jour*</label>
                                        <select class="form-control wizard-required" id="jour" name="jour">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="mois">Mois</label>
                                        <select class="form-control wizard-required" id="mois" name="mois">
                                            <option value="">Mois</option>
                                            <option value="jan">jan</option>
                                            <option value="Feb">Feb</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="Jully">Jully</option>
                                            <option value="August">August</option>
                                            <option value="Sept">Sept</option>
                                            <option value="Oct">Oct</option>
                                            <option value="Nov">Nov</option>
                                            <option value="Dec">Dec</option>
                                        </select>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="annee">Année*</label>
                                        <input type="number" class="form-control wizard-required" id="annee" name="annee">
                                        <div class="wizard-form-error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                Sexe
                                <div class="wizard-form-radio">
                                    <input name="sexe" id="radio1" type="radio" value="Masculin">
                                    <label for="radio1">Masculin</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="sexe" id="radio2" type="radio" value="Feminin">
                                    <label for="radio2">Feminin</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lmaternelle">Langue maternelle</label>
                                <select class="form-control wizard-required select2" id="lmaternelle" name="lmaternelle[]" multiple>
                                    <option value="Anglais">Anglais</option>
                                    <option value="Francais">Français</option>
                                    <option value="Arabe">Arabe</option>
                                    <option value="Autre">Autre</option>
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <label for="lparlée">Langue parlée</label>
                                <select class="form-control wizard-required select2" id="lparlée" name="lparlée[]" multiple>
                                    <option value="Anglais">Anglais</option>
                                    <option value="Francais">Français</option>
                                    <option value="Arabe">Arabe</option>
                                    <option value="Autre">Autre</option>
                                </select>
                                <div class="wizard-form-error"></div>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <legend>Études précédentes</legend>

                            <div class="form-group">
                                <label for="paysetude">Pays d'études*</label>
                                <select class="form-control wizard-required" id="paysetude" name="pays">
                                    <option selected="selected" value="Afghanistan">Afghanistan</option>
                                    <option value="Afrique du Sud">Afrique du Sud</option>
                                    <option value="Albanie">Albanie</option>
                                    <option value="Algérie">Algérie</option>
                                    <option value="Allemagne">Allemagne</option>
                                    <option value="Andorre">Andorre</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                                    <option value="apatride">apatride</option>
                                    <option value="Arabie saoudite">Arabie saoudite</option>
                                    <option value="Argentine">Argentine</option>
                                    <option value="Arménie">Arménie</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australie">Australie</option>
                                    <option value="Autriche">Autriche</option>
                                    <option value="Azerbaïdjan">Azerbaïdjan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahreïn">Bahreïn</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbade">Barbade</option>
                                    <option value="Belgique">Belgique</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Bénin">Bénin</option>
                                    <option value="Bermude">Bermude</option>
                                    <option value="Bhoutan">Bhoutan</option>
                                    <option value="Biélorussie">Biélorussie</option>
                                    <option value="Bolivie">Bolivie</option>
                                    <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Brésil">Brésil</option>
                                    <option value="Brunei">Brunei</option>
                                    <option value="Bulgarie">Bulgarie</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodge">Cambodge</option>
                                    <option value="Cameroun">Cameroun</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cap-Vert">Cap-Vert</option>
                                    <option value="Chili">Chili</option>
                                    <option value="Chine">Chine</option>
                                    <option value="Chypre">Chypre</option>
                                    <option value="Cocos (Keeling)">Cocos (Keeling)</option>
                                    <option value="Colombie">Colombie</option>
                                    <option value="Comores">Comores</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                    <option value="Croatie">Croatie</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Danemark">Danemark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominique">Dominique</option>
                                    <option value="Égypte">Égypte</option>
                                    <option value="Émirats arabes unis">Émirats arabes unis</option>
                                    <option value="Équateur">Équateur</option>
                                    <option value="Erythrée">Erythrée</option>
                                    <option value="Espagne">Espagne</option>
                                    <option value="Estonie">Estonie</option>
                                    <option value="État de Palestine">État de Palestine</option>
                                    <option value="États-Unis">États-Unis</option>
                                    <option value="Éthiopie">Éthiopie</option>
                                    <option value="Fidji">Fidji</option>
                                    <option value="Finlande">Finlande</option>
                                    <option value="France">France</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambie">Gambie</option>
                                    <option value="Géorgie">Géorgie</option>
                                    <option value="Géorgie du Sud et les îles Sandwich du Sud">Géorgie du Sud et les îles Sandwich du Sud</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Grèce">Grèce</option>
                                    <option value="Grenade">Grenade</option>
                                    <option value="Groenland">Groenland</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinée">Guinée</option>
                                    <option value="Guinée équatoriale">Guinée équatoriale</option>
                                    <option value="Guinée-Bissau">Guinée-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Guyane française">Guyane française</option>
                                    <option value="Haïti">Haïti</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong-Kong">Hong-Kong</option>
                                    <option value="Hongrie">Hongrie</option>
                                    <option value="île Christmas">île Christmas</option>
                                    <option value="Ile de Man">Ile de Man</option>
                                    <option value="Îles Caïmans">Îles Caïmans</option>
                                    <option value="Îles Cook">Îles Cook</option>
                                    <option value="îles Falkland">îles Falkland</option>
                                    <option value="Îles Féroé">Îles Féroé</option>
                                    <option value="Îles Mariannes du Nord">Îles Mariannes du Nord</option>
                                    <option value="Îles Marshall">Îles Marshall</option>
                                    <option value="Îles Norfolk">Îles Norfolk</option>
                                    <option value="Îles Vierges américaines">Îles Vierges américaines</option>
                                    <option value="Îles Vierges britanniques">Îles Vierges britanniques</option>
                                    <option value="Inde">Inde</option>
                                    <option value="Indonésie">Indonésie</option>
                                    <option value="Irak">Irak</option>
                                    <option value="Iran">Iran</option>
                                    <option value="Irlande">Irlande</option>
                                    <option value="Islande">Islande</option>
                                    <option value="Israël">Israël</option>
                                    <option value="Italie">Italie</option>
                                    <option value="Jamaïque">Jamaïque</option>
                                    <option value="Japon">Japon</option>
                                    <option value="Jordanie">Jordanie</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kirghizistan">Kirghizistan</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kosovo">Kosovo</option>
                                    <option value="Koweït">Koweït</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Lettonie">Lettonie</option>
                                    <option value="Liban">Liban</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libye">Libye</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lituanie">Lituanie</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macédoine">Macédoine</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malaisie">Malaisie</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malte">Malte</option>
                                    <option value="Maroc">Maroc</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Maurice">Maurice</option>
                                    <option value="Mauritanie">Mauritanie</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexique">Mexique</option>
                                    <option value="Micronésie">Micronésie</option>
                                    <option value="Moldavie">Moldavie</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolie">Mongolie</option>
                                    <option value="Monténégro">Monténégro</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibie">Namibie</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Népal">Népal</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norvège">Norvège</option>
                                    <option value="Nouvelle-Calédonie">Nouvelle-Calédonie</option>
                                    <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Ouganda">Ouganda</option>
                                    <option value="Ouzbékistan">Ouzbékistan</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="pays inconnu">pays inconnu</option>
                                    <option value="Pays non précisé">Pays non précisé</option>
                                    <option value="Pays-Bas">Pays-Bas</option>
                                    <option value="Pérou">Pérou</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Pologne">Pologne</option>
                                    <option value="Polynésie française">Polynésie française</option>
                                    <option value="Porto Rico">Porto Rico</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="République centrafricaine">République centrafricaine</option>
                                    <option value="République de Corée">République de Corée</option>
                                    <option value="République Démocratique du Congo">République Démocratique du Congo</option>
                                    <option value="République dominicaine">République dominicaine</option>
                                    <option value="République du Congo">République du Congo</option>
                                    <option value="République populaire démocratique de Corée">République populaire démocratique de Corée</option>
                                    <option value="République tchèque">République tchèque</option>
                                    <option value="Réunion">Réunion</option>
                                    <option value="Roumanie">Roumanie</option>
                                    <option value="Royaume-Uni">Royaume-Uni</option>
                                    <option value="Russie">Russie</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Sahara occidental">Sahara occidental</option>
                                    <option value="Saint-Barthélemy">Saint-Barthélemy</option>
                                    <option value="Sainte-Hélène">Sainte-Hélène</option>
                                    <option value="Saint-Kitts-et-Nevis">Saint-Kitts-et-Nevis</option>
                                    <option value="Saint-Lucie">Saint-Lucie</option>
                                    <option value="Saint-Marin">Saint-Marin</option>
                                    <option value="Saint-Pierre-et-Miquelon">Saint-Pierre-et-Miquelon</option>
                                    <option value="Saint-Vincent-et-Grenadines">Saint-Vincent-et-Grenadines</option>
                                    <option value="Salomon">Salomon</option>
                                    <option value="Salvador">Salvador</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="Sao Tomé et Principe">Sao Tomé et Principe</option>
                                    <option value="Sénégal">Sénégal</option>
                                    <option value="Serbie">Serbie</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leones">Sierra Leones</option>
                                    <option value="Singapour">Singapour</option>
                                    <option value="Slovaquie">Slovaquie</option>
                                    <option value="Slovénie">Slovénie</option>
                                    <option value="Somalie">Somalie</option>
                                    <option value="Soudan">Soudan</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Suède">Suède</option>
                                    <option value="Suisse">Suisse</option>
                                    <option value="Surinam">Surinam</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Syrie">Syrie</option>
                                    <option value="Tadjikistan">Tadjikistan</option>
                                    <option value="Taiwan">Taiwan</option>
                                    <option value="Tanzanie">Tanzanie</option>
                                    <option value="Tchad">Tchad</option>
                                    <option value="Thaïlande">Thaïlande</option>
                                    <option value="Timor oriental">Timor oriental</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
                                    <option value="Tunisie">Tunisie</option>
                                    <option value="Turkménistan">Turkménistan</option>
                                    <option value="Turquie">Turquie</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Vatican">Vatican</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viêt Nam">Viêt Nam</option>
                                    <option value="Wallis-et-Futuna">Wallis-et-Futuna</option>
                                    <option value="Yémen">Yémen</option>
                                    <option value="Yémen du Sud">Yémen du Sud</option>
                                    <option value="Zambie">Zambie</option>
                                    <option value="Zimbabwe">Zimbabwe</option>

                                </select>
                                <div class="wizard-form-error"></div>
                            </div>

                            <div class="form-group">
                                <label for="etablissment" class="wizard-form-text-label">Établissement*</label>
                                <input type="text" class="form-control wizard-required" id="etablissment" name="etablissement">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <label for="diplome" class="wizard-form-text-label">Diplôme*</label>
                                <input type="text" class="form-control wizard-required" id="diplome" name="diplome">
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <label for="duree" class="wizard-form-text-label">Durée du programme*(en année)</label>
                                <input type="number" max="10"  min="1" class="form-control wizard-required" id="duree" name="dprogramme">
                                <div class="wizard-form-error"></div>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <legend>Paiement frais d'admission</legend>
                            <div class="alert alert-warning">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam asperiores cumque deleniti deserunt dignissimos dolorem eaque enim esse facere, impedit maiores, nobis, optio placeat quas quasi sint tempora velit?
                                </p>
                            </div>
                        </fieldset>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <a href="{{route('backoffice.demande.index')}}" class="btn btn-primary">Retour</a>
                                    <button type="submit" class="btn btn-success">Valider la Demande</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function (){
            $('.select2').select2({
                placeholder: "Selectionnez Langue(s)",
            });
        });
    </script>
    <script>
        $('body').on('change','#type-formation',function (){
            $('.js-formation-select').empty();
            $('.js-specialite-select').empty();
            let valeur = $(this).val();
            if (valeur === "initiale") {
                $.ajax({
                    url:"{{route('ajax.formationsbytype')}}" + '/' + valeur,
                    method:"GET",
                    success: function (res) {
                        if (res.success === 1) {
                            let opts = '';
                            $.each(res.formations,function (i,v) {
                                opts+= '<option data-id="'+ v.id +'" value="'+ v.name +'">'+ v.name +'</option>';
                            });
                            $('.js-formation-select').html(`
                                <label for="programme">Choix de programme*</label>
                                <select class="form-control wizard required" id="programme" name="programme">
                                    <option value="" selected disabled>Choix de programme</option>
                                    `+ opts +`
                                </select>
                                <div class="wizard-form-error"></div>`);

                        }
                    }
                });
            } else {
                $.ajax({
                    url:"{{route('ajax.specialitesbyformation')}}",
                    method:"GET",
                    success: function (res) {
                        if (res.success === 1) {
                            let opts = '';
                            $.each(res.specialites,function (i,v) {
                                opts+= '<option value="'+ v.name +'">'+ v.name +'</option>';
                            });
                            $('.js-specialite-select').html(`
                                <label for="specialite">Choix de spécialité*</label>
                                <select class="form-control wizard required" id="specialite" name="specialite">
                                    <option value="" selected disabled>Choix de spécialité</option>
                                    `+ opts +`
                                </select>
                                <div class="wizard-form-error"></div>`);

                        }
                    }
                });
            }
        });
        $('body').on('change','#programme',function (){
            $.ajax({
                url:"{{route('ajax.specialitesbyformation')}}" + '/' + $(this).children("option:selected").attr('data-id'),
                method:"GET",
                success: function (res) {
                    if (res.success === 1) {
                        let opts = '';
                        $.each(res.specialites,function (i,v) {
                            opts+= '<option value="'+ v.name +'">'+ v.name +'</option>';
                        });
                        $('.js-specialite-select').html(`
                                <label for="specialite">Choix de spécialité*</label>
                                <select class="form-control wizard required" id="specialite" name="specialite">
                                    <option value="" selected disabled>Choix de spécialité</option>
                                    `+ opts +`
                                </select>
                                <div class="wizard-form-error"></div>`);

                    }
                }
            });
        });
    </script>
@endsection
