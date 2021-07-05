<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="Inovatis - Préinscription">
    <meta name="description" content="Inovatis - Préinscription">
    <title>Inovatis - Préinscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #ffffff;
            color: #444444;
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
            font-weight: 300;
            margin: 0;
            padding: 0;
        }
        .select2-container {
            width: 100% !important;
        }
        .wizard-content-left {
            background-blend-mode: darken;
            background-color: rgba(0, 0, 0, 0.45);
            background-image: url("{{asset('images/form-wizard-bg-2.webp')}}");
            background-position: center center;
            background-size: cover;
            height: 100vh;
            padding: 30px;
        }
        .wizard-content-left h1 {
            color: #ffffff;
            font-size: 38px;
            font-weight: 600;
            padding: 12px 20px;
            text-align: center;
        }

        .form-wizard {
            color: #888888;
            padding: 30px;
        }
        .form-wizard .wizard-form-radio {
            display: inline-block;
            margin-left: 5px;
            position: relative;
        }
        .form-wizard .wizard-form-radio input[type="radio"] {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            background-color: #dddddd;
            height: 25px;
            width: 25px;
            display: inline-block;
            vertical-align: middle;
            border-radius: 50%;
            position: relative;
            cursor: pointer;
        }
        .form-wizard .wizard-form-radio input[type="radio"]:focus {
            outline: 0;
        }
        .form-wizard .wizard-form-radio input[type="radio"]:checked {
            background-color: #1b2e51;
        }
        .form-wizard .wizard-form-radio input[type="radio"]:checked::before {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            display: inline-block;
            background-color: #ffffff;
            border-radius: 50%;
            left: 1px;
            right: 0;
            margin: 0 auto;
            top: 8px;
        }
        .form-wizard .wizard-form-radio input[type="radio"]:checked::after {
            content: "";
            display: inline-block;
            webkit-animation: click-radio-wave 0.65s;
            -moz-animation: click-radio-wave 0.65s;
            animation: click-radio-wave 0.65s;
            background: #000000;
            content: '';
            display: block;
            position: relative;
            z-index: 100;
            border-radius: 50%;
        }
        .form-wizard .wizard-form-radio input[type="radio"] ~ label {
            padding-left: 10px;
            cursor: pointer;
        }
        .form-wizard .form-wizard-header {
            text-align: center;
        }
        .form-wizard .form-wizard-next-btn, .form-wizard .form-wizard-previous-btn, .form-wizard .form-wizard-submit {
            background-color: #1b2e51;
            color: #ffffff;
            display: inline-block;
            min-width: 100px;
            min-width: 120px;
            padding: 10px;
            text-align: center;
        }
        .form-wizard .form-wizard-next-btn:hover, .form-wizard .form-wizard-next-btn:focus, .form-wizard .form-wizard-previous-btn:hover, .form-wizard .form-wizard-previous-btn:focus, .form-wizard .form-wizard-submit:hover, .form-wizard .form-wizard-submit:focus {
            color: #ffffff;
            opacity: 0.6;
            text-decoration: none;
        }
        .form-wizard .wizard-fieldset {
            display: none;
        }
        .form-wizard .wizard-fieldset.show {
            display: block;
        }
        .form-wizard .wizard-form-error {
            display: none;
            background-color: #d70b0b;
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 2px;
            width: 100%;
        }
        .form-wizard .form-wizard-previous-btn {
            background-color: #b4a169;
        }
        .form-wizard .form-control {
            font-weight: 300;
            height: auto !important;
            padding: 15px;
            color: #888888;
            background-color: #f1f1f1;
            border: none;
        }
        .form-wizard .form-control:focus {
            box-shadow: none;
        }
        .form-wizard .form-group {
            position: relative;
            margin: 25px 0;
        }
        .form-wizard .wizard-form-text-label {
            position: absolute;
            left: 10px;
            top: 16px;
            transition: 0.2s linear all;
        }
        .form-wizard .focus-input .wizard-form-text-label {
            color: #d65470;
            top: -18px;
            transition: 0.2s linear all;
            font-size: 12px;
        }
        .form-wizard .form-wizard-steps {
            margin: 30px 0;
        }
        .form-wizard .form-wizard-steps li {
            width: 20%;
            float: left;
            position: relative;
        }
        .form-wizard .form-wizard-steps li::after {
            background-color: #f3f3f3;
            content: "";
            height: 5px;
            left: 0;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            border-bottom: 1px solid #dddddd;
            border-top: 1px solid #dddddd;
        }
        .form-wizard .form-wizard-steps li span {
            background-color: #dddddd;
            border-radius: 50%;
            display: inline-block;
            height: 40px;
            line-height: 40px;
            position: relative;
            text-align: center;
            width: 40px;
            z-index: 1;
        }
        .form-wizard .form-wizard-steps li:last-child::after {
            width: 50%;
        }
        .form-wizard .form-wizard-steps li.active span, .form-wizard .form-wizard-steps li.activated span {
            background-color: #1b2e51;
            color: #ffffff;
        }
        .form-wizard .form-wizard-steps li.active::after, .form-wizard .form-wizard-steps li.activated::after {
            background-color: #1b2e51;
            left: 50%;
            width: 50%;
            border-color: #1b2e51;
        }
        .form-wizard .form-wizard-steps li.activated::after {
            width: 100%;
            border-color: #1b2e51;
        }
        .form-wizard .form-wizard-steps li:last-child::after {
            left: 0;
        }
        .form-wizard .wizard-password-eye {
            position: absolute;
            right: 32px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        @keyframes click-radio-wave {
            0% {
                width: 25px;
                height: 25px;
                opacity: 0.35;
                position: relative;
            }
            100% {
                width: 60px;
                height: 60px;
                margin-left: -15px;
                margin-top: -15px;
                opacity: 0.0;
            }
        }
        @media screen and (max-width: 767px) {
            .wizard-content-left {
                height: auto;
            }
        }

    </style>
</head>
<body>
@if(isset($demande))
    <section class="wizard-section">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-6">
                <div class="wizard-content-left d-flex justify-content-center align-items-center">
                    <h1>Formulaire de Pré-inscription</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                @if($demande->step > 5)
                    <div class="form-wizard">
                        <table border="1" style="width: 100%">
                            <thead>
                            <tr>
                                <th>Date de la demande</th>
                                <th>Adresse Email</th>
                                <th>Etat</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class="text-center">{{ date('d M, Y', strtotime($demande->updated_at)) }}</th>
                                <th class="text-center">{{ $demande->email }}</th>
                                <th class="text-center">
                                    @switch($demande->etat)
                                        @case('en_cours')
                                        <span class="badge badge-primary">
                                            En Cours
                                        </span>
                                        @break
                                        @case('refuse')
                                        <span class="badge badge-danger">
                                            Refusée
                                        </span>
                                        @break
                                        @case('accepte')
                                        <span class="badge badge-success">
                                            Acceptée
                                        </span>
                                        @break
                                    @endswitch
                                </th>
                            </tr>
                            </tbody>
                        </table>
                        <a href="{{route("home")}}" class="btn form-wizard-previous-btn btn-block mt-5">Retour à la page d'accueil</a>
                    </div>
                @else
                    <div class="form-wizard">
                        <form action="" method="post" role="form" id="preregistration-form">
                            @csrf
                            <div class="form-wizard-header">
                                <input type="hidden" name="step" value="{{$demande->step}}" id="step">
                                <p>Remplissez tous les champs du formulaire pour passer à l'étape suivante</p>
                                <ul class="list-unstyled form-wizard-steps clearfix">
                                    @for($i = 1; $i < 6; $i++)
                                        <li class="{{$i < $demande->step ? 'activated' : ''}} @if($i == $demande->step) active @endif "><span>{{$i}}</span></li>
                                    @endfor
                                </ul>
                            </div>
                            <fieldset class="wizard-fieldset @if(1 == $demande->step) show @endif ">
                                <h5>Informations de contact</h5>
                                <div class="form-group focus-input">
                                    <input type="text" class="form-control wizard-required" id="prenom" name="prenom" value="{{$demande->prenom}}">
                                    <label for="prenom" class="wizard-form-text-label">Prénom*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group focus-input">
                                    <input type="text" class="form-control wizard-required" id="nom" name="nom" value="{{$demande->nom}}">
                                    <label for="nom" class="wizard-form-text-label">Nom*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <input type="hidden" class="form-control wizard-required" id="email" name="email" value="{{$demande->email}}">
                                <div class="form-group focus-input">
                                    <input type="text" pattern="[0-9]{8}" class="form-control wizard-required" id="telephone" name="telephone" value="{{$demande->telephone}}">
                                    <label for="telephone" class="wizard-form-text-label">N° de téléphone mobile*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Suivant</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset @if(2 == $demande->step) show @endif">
                                <h5>Choix du programme</h5>
                                <div class="form-group">
                                    <label for="session">Session*</label>
                                    <select class="form-control wizard-required" id="session" name="session">
                                        <option value="" disabled>Session</option>
                                        @foreach($sessions as $ss)
                                            <option @if($demande->session == $ss->name) selected @endif value="{{$ss->name}}">{{$ss->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group">
                                    <label for="type-formation">Formation*</label>
                                    <select class="form-control wizard-required" id="type-formation" name="type_formation">
                                        <option value="" disabled>Formation</option>
                                        <option @if($demande->type_formation == "initiale") selected @endif value="initiale">Formation Initiale</option>
                                        <option @if($demande->type_formation == "continue") selected @endif value="continue">Formation Continue</option>
                                    </select>
                                    <div class="wizard-form-error"></div>
                                </div>
                                @if($demande->type_formation == "continue")
                                    <div class="form-group js-formation-select"></div>
                                    <div class="form-group js-specialite-select">
                                        <label for="specialite">Choix de spécialité*</label>
                                        <select class="form-control wizard required" id="specialite" name="specialite">
                                            <option value="" selected disabled>Choix de programme</option>
                                            @foreach($specs as $spec)
                                                <option @if($spec->name == $demande->specialite) selected @endif value="{{$spec->name}}">{{$spec->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                @else
                                    <div class="form-group js-formation-select">
                                        <label for="programme">Choix de programme*</label>
                                        <select class="form-control wizard required" id="programme" name="programme">
                                            <option value="" selected disabled>Choix de programme</option>
                                            @foreach(\App\Formation::where('type','!=','continue')->get() as $f)
                                                <option @if($f->name == $demande->programme) selected @endif value="{{$f->name}}">{{$f->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                    <div class="form-group js-specialite-select">
                                        <label for="specialite">Choix de spécialité*</label>
                                        <select class="form-control wizard required" id="specialite" name="specialite">
                                            <option value="" selected disabled>Choix de programme</option>
                                            @foreach(\App\Formation::where('name','=',$demande->programme)->first()->specialites as $spec)
                                                <option @if($spec->name == $demande->specialite) selected @endif value="{{$spec->name}}">{{$spec->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="wizard-form-error"></div>
                                    </div>
                                @endif
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Précedent</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Suivant</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset @if(3 == $demande->step) show @endif">
                                <h5>Informations personnelles</h5>
                                <div class="row">
                                    <div class="col-12">Date de naissance</div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="jour">Jour*</label>
                                            <select class="form-control wizard-required" id="jour" name="jour">
                                                @for($j = 1; $j < 32 ; $j++)
                                                    <option @if($demande->jour == $j) selected @endif value="{{$j}}">{{$j}}</option>
                                                @endfor
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="mois">Mois</label>
                                            <select class="form-control wizard-required" id="mois" name="mois">
                                                <option value="">Mois</option>
                                                <option @if($demande->mois == 'jan') selected @endif value="jan">jan</option>
                                                <option @if($demande->mois == 'Feb') selected @endif value="Feb">Feb</option>
                                                <option @if($demande->mois == 'March') selected @endif value="March">March</option>
                                                <option @if($demande->mois == 'April') selected @endif value="April">April</option>
                                                <option @if($demande->mois == 'May') selected @endif value="May">May</option>
                                                <option @if($demande->mois == 'June') selected @endif value="June">June</option>
                                                <option @if($demande->mois == 'Jully') selected @endif value="Jully">Jully</option>
                                                <option @if($demande->mois == 'August') selected @endif value="August">August</option>
                                                <option @if($demande->mois == 'Sept') selected @endif value="Sept">Sept</option>
                                                <option @if($demande->mois == 'Oct') selected @endif value="Oct">Oct</option>
                                                <option @if($demande->mois == 'Nov') selected @endif value="Nov">Nov</option>
                                                <option @if($demande->mois == 'Dec') selected @endif value="Dec">Dec</option>
                                            </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group">
                                            <label for="annee">Année*</label>
                                            <input type="number" class="form-control wizard-required" id="annee" name="annee" value="{{$demande->annee}}">
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    Sexe
                                    <div class="wizard-form-radio">
                                        <input name="sexe" id="radio1" type="radio" value="Masculin"  @if($demande->sexe == 'Masculin') checked @endif>
                                        <label for="radio1">Masculin</label>
                                    </div>
                                    <div class="wizard-form-radio">
                                        <input name="sexe" id="radio2" type="radio" value="Feminin" @if($demande->sexe == 'Feminin') checked @endif>
                                        <label for="radio2">Feminin</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="lmaternelle">Langue maternelle</label>
                                    <select class="form-control wizard-required select2" id="lmaternelle" name="lmaternelle[]" multiple>
                                        <option @if(in_array("Anglais",$lmaternelle)) selected @endif value="Anglais">Anglais</option>
                                        <option @if(in_array("Francais",$lmaternelle)) selected @endif value="Francais">Français</option>
                                        <option @if(in_array("Arabe",$lmaternelle)) selected @endif value="Arabe">Arabe</option>
                                        <option @if(in_array("Autre",$lmaternelle)) selected @endif value="Autre">Autre</option>
                                    </select>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group">
                                    <label for="lparlée">Langue parlée</label>
                                    <select class="form-control wizard-required select2" id="lparlée" name="lparlée[]" multiple>
                                        <option @if(in_array("Anglais",$lparlee)) selected @endif value="Anglais">Anglais</option>
                                        <option @if(in_array("Francais",$lparlee)) selected @endif value="Francais">Français</option>
                                        <option @if(in_array("Arabe",$lparlee)) selected @endif value="Arabe">Arabe</option>
                                        <option @if(in_array("Autre",$lparlee)) selected @endif value="Autre">Autre</option>
                                    </select>
                                    <div class="wizard-form-error"></div>
                                </div>

                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Précedent</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset @if(4 == $demande->step) show @endif">
                                <h5>Études précédentes</h5>

                                <div class="form-group">
                                    <label for="paysetude">Pays d'études*</label>
                                    <select class="form-control wizard-required" id="paysetude" name="pays">
                                        <option selected="selected" value="Afghanistan">Afghanistan</option>
                                        <option @if($demande->pays == 'Afrique') selected @endif value="Afrique du Sud">Afrique du Sud</option>
                                        <option @if($demande->pays == 'Albanie') selected @endif value="Albanie">Albanie</option>
                                        <option @if($demande->pays == 'Algérie') selected @endif value="Algérie">Algérie</option>
                                        <option @if($demande->pays == 'Allemagne') selected @endif value="Allemagne">Allemagne</option>
                                        <option @if($demande->pays == 'Andorre') selected @endif value="Andorre">Andorre</option>
                                        <option @if($demande->pays == 'Angola') selected @endif value="Angola">Angola</option>
                                        <option @if($demande->pays == 'Anguilla') selected @endif value="Anguilla">Anguilla</option>
                                        <option @if($demande->pays == 'Antigua') selected @endif value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                                        <option @if($demande->pays == 'apatride') selected @endif value="apatride">apatride</option>
                                        <option @if($demande->pays == 'Arabie') selected @endif value="Arabie saoudite">Arabie saoudite</option>
                                        <option @if($demande->pays == 'Argentine') selected @endif value="Argentine">Argentine</option>
                                        <option @if($demande->pays == 'Arménie') selected @endif value="Arménie">Arménie</option>
                                        <option @if($demande->pays == 'Aruba') selected @endif value="Aruba">Aruba</option>
                                        <option @if($demande->pays == 'Australie') selected @endif value="Australie">Australie</option>
                                        <option @if($demande->pays == 'Autriche') selected @endif value="Autriche">Autriche</option>
                                        <option @if($demande->pays == 'Azerbaïdjan') selected @endif value="Azerbaïdjan">Azerbaïdjan</option>
                                        <option @if($demande->pays == 'Bahamas') selected @endif value="Bahamas">Bahamas</option>
                                        <option @if($demande->pays == 'Bahreïn') selected @endif value="Bahreïn">Bahreïn</option>
                                        <option @if($demande->pays == 'Bangladesh') selected @endif value="Bangladesh">Bangladesh</option>
                                        <option @if($demande->pays == 'Barbade') selected @endif value="Barbade">Barbade</option>
                                        <option @if($demande->pays == 'Belgique') selected @endif value="Belgique">Belgique</option>
                                        <option @if($demande->pays == 'Belize') selected @endif value="Belize">Belize</option>
                                        <option @if($demande->pays == 'Bénin') selected @endif value="Bénin">Bénin</option>
                                        <option @if($demande->pays == 'Bermude') selected @endif value="Bermude">Bermude</option>
                                        <option @if($demande->pays == 'Bhoutan') selected @endif value="Bhoutan">Bhoutan</option>
                                        <option @if($demande->pays == 'Biélorussie') selected @endif value="Biélorussie">Biélorussie</option>
                                        <option @if($demande->pays == 'Bolivie') selected @endif value="Bolivie">Bolivie</option>
                                        <option @if($demande->pays == 'Bosnie') selected @endif value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                        <option @if($demande->pays == 'Botswana') selected @endif value="Botswana">Botswana</option>
                                        <option @if($demande->pays == 'Brésil') selected @endif value="Brésil">Brésil</option>
                                        <option @if($demande->pays == 'Brunei') selected @endif value="Brunei">Brunei</option>
                                        <option @if($demande->pays == 'Bulgarie') selected @endif value="Bulgarie">Bulgarie</option>
                                        <option @if($demande->pays == 'Burkina') selected @endif value="Burkina Faso">Burkina Faso</option>
                                        <option @if($demande->pays == 'Burundi') selected @endif value="Burundi">Burundi</option>
                                        <option @if($demande->pays == 'Cambodge') selected @endif value="Cambodge">Cambodge</option>
                                        <option @if($demande->pays == 'Cameroun') selected @endif value="Cameroun">Cameroun</option>
                                        <option @if($demande->pays == 'Canada') selected @endif value="Canada">Canada</option>
                                        <option @if($demande->pays == 'Cap') selected @endif value="Cap-Vert">Cap-Vert</option>
                                        <option @if($demande->pays == 'Chili') selected @endif value="Chili">Chili</option>
                                        <option @if($demande->pays == 'Chine') selected @endif value="Chine">Chine</option>
                                        <option @if($demande->pays == 'Chypre') selected @endif value="Chypre">Chypre</option>
                                        <option @if($demande->pays == 'Cocos') selected @endif value="Cocos (Keeling)">Cocos (Keeling)</option>
                                        <option @if($demande->pays == 'Colombie') selected @endif value="Colombie">Colombie</option>
                                        <option @if($demande->pays == 'Comores') selected @endif value="Comores">Comores</option>
                                        <option @if($demande->pays == 'Costa') selected @endif value="Costa Rica">Costa Rica</option>
                                        <option @if($demande->pays == 'Côte') selected @endif value="Côte d'Ivoire">Côte d'Ivoire</option>
                                        <option @if($demande->pays == 'Croatie') selected @endif value="Croatie">Croatie</option>
                                        <option @if($demande->pays == 'Cuba') selected @endif value="Cuba">Cuba</option>
                                        <option @if($demande->pays == 'Danemark') selected @endif value="Danemark">Danemark</option>
                                        <option @if($demande->pays == 'Djibouti') selected @endif value="Djibouti">Djibouti</option>
                                        <option @if($demande->pays == 'Dominique') selected @endif value="Dominique">Dominique</option>
                                        <option @if($demande->pays == 'Égypte') selected @endif value="Égypte">Égypte</option>
                                        <option @if($demande->pays == 'Émirats') selected @endif value="Émirats arabes unis">Émirats arabes unis</option>
                                        <option @if($demande->pays == 'Équateur') selected @endif value="Équateur">Équateur</option>
                                        <option @if($demande->pays == 'Erythrée') selected @endif value="Erythrée">Erythrée</option>
                                        <option @if($demande->pays == 'Espagne') selected @endif value="Espagne">Espagne</option>
                                        <option @if($demande->pays == 'Estonie') selected @endif value="Estonie">Estonie</option>
                                        <option @if($demande->pays == 'État') selected @endif value="État de Palestine">État de Palestine</option>
                                        <option @if($demande->pays == 'États') selected @endif value="États-Unis">États-Unis</option>
                                        <option @if($demande->pays == 'Éthiopie') selected @endif value="Éthiopie">Éthiopie</option>
                                        <option @if($demande->pays == 'Fidji') selected @endif value="Fidji">Fidji</option>
                                        <option @if($demande->pays == 'Finlande') selected @endif value="Finlande">Finlande</option>
                                        <option @if($demande->pays == 'France') selected @endif value="France">France</option>
                                        <option @if($demande->pays == 'Gabon') selected @endif value="Gabon">Gabon</option>
                                        <option @if($demande->pays == 'Gambie') selected @endif value="Gambie">Gambie</option>
                                        <option @if($demande->pays == 'Géorgie') selected @endif value="Géorgie">Géorgie</option>
                                        <option @if($demande->pays == 'Géorgie') selected @endif value="Géorgie du Sud et les îles Sandwich du Sud">Géorgie du Sud et les îles Sandwich du Sud</option>
                                        <option @if($demande->pays == 'Ghana') selected @endif value="Ghana">Ghana</option>
                                        <option @if($demande->pays == 'Gibraltar') selected @endif value="Gibraltar">Gibraltar</option>
                                        <option @if($demande->pays == 'Grèce') selected @endif value="Grèce">Grèce</option>
                                        <option @if($demande->pays == 'Grenade') selected @endif value="Grenade">Grenade</option>
                                        <option @if($demande->pays == 'Groenland') selected @endif value="Groenland">Groenland</option>
                                        <option @if($demande->pays == 'Guadeloupe') selected @endif value="Guadeloupe">Guadeloupe</option>
                                        <option @if($demande->pays == 'Guam') selected @endif value="Guam">Guam</option>
                                        <option @if($demande->pays == 'Guatemala') selected @endif value="Guatemala">Guatemala</option>
                                        <option @if($demande->pays == 'Guinée') selected @endif value="Guinée">Guinée</option>
                                        <option @if($demande->pays == 'Guinée') selected @endif value="Guinée équatoriale">Guinée équatoriale</option>
                                        <option @if($demande->pays == 'Guinée') selected @endif value="Guinée-Bissau">Guinée-Bissau</option>
                                        <option @if($demande->pays == 'Guyana') selected @endif value="Guyana">Guyana</option>
                                        <option @if($demande->pays == 'Guyane') selected @endif value="Guyane française">Guyane française</option>
                                        <option @if($demande->pays == 'Haïti') selected @endif value="Haïti">Haïti</option>
                                        <option @if($demande->pays == 'Honduras') selected @endif value="Honduras">Honduras</option>
                                        <option @if($demande->pays == 'Hong') selected @endif value="Hong-Kong">Hong-Kong</option>
                                        <option @if($demande->pays == 'Hongrie') selected @endif value="Hongrie">Hongrie</option>
                                        <option @if($demande->pays == 'île') selected @endif value="île Christmas">île Christmas</option>
                                        <option @if($demande->pays == 'Ile') selected @endif value="Ile de Man">Ile de Man</option>
                                        <option @if($demande->pays == 'Îles') selected @endif value="Îles Caïmans">Îles Caïmans</option>
                                        <option @if($demande->pays == 'Îles') selected @endif value="Îles Cook">Îles Cook</option>
                                        <option @if($demande->pays == 'îles') selected @endif value="îles Falkland">îles Falkland</option>
                                        <option @if($demande->pays == 'Îles') selected @endif value="Îles Féroé">Îles Féroé</option>
                                        <option @if($demande->pays == 'Îles') selected @endif value="Îles Mariannes du Nord">Îles Mariannes du Nord</option>
                                        <option @if($demande->pays == 'Îles') selected @endif value="Îles Marshall">Îles Marshall</option>
                                        <option @if($demande->pays == 'Îles') selected @endif value="Îles Norfolk">Îles Norfolk</option>
                                        <option @if($demande->pays == 'Îles') selected @endif value="Îles Vierges américaines">Îles Vierges américaines</option>
                                        <option @if($demande->pays == 'Îles') selected @endif value="Îles Vierges britanniques">Îles Vierges britanniques</option>
                                        <option @if($demande->pays == 'Inde') selected @endif value="Inde">Inde</option>
                                        <option @if($demande->pays == 'Indonésie') selected @endif value="Indonésie">Indonésie</option>
                                        <option @if($demande->pays == 'Irak') selected @endif value="Irak">Irak</option>
                                        <option @if($demande->pays == 'Iran') selected @endif value="Iran">Iran</option>
                                        <option @if($demande->pays == 'Irlande') selected @endif value="Irlande">Irlande</option>
                                        <option @if($demande->pays == 'Islande') selected @endif value="Islande">Islande</option>
                                        <option @if($demande->pays == 'Israël') selected @endif value="Israël">Israël</option>
                                        <option @if($demande->pays == 'Italie') selected @endif value="Italie">Italie</option>
                                        <option @if($demande->pays == 'Jamaïque') selected @endif value="Jamaïque">Jamaïque</option>
                                        <option @if($demande->pays == 'Japon') selected @endif value="Japon">Japon</option>
                                        <option @if($demande->pays == 'Jordanie') selected @endif value="Jordanie">Jordanie</option>
                                        <option @if($demande->pays == 'Kazakhstan') selected @endif value="Kazakhstan">Kazakhstan</option>
                                        <option @if($demande->pays == 'Kenya') selected @endif value="Kenya">Kenya</option>
                                        <option @if($demande->pays == 'Kirghizistan') selected @endif value="Kirghizistan">Kirghizistan</option>
                                        <option @if($demande->pays == 'Kiribati') selected @endif value="Kiribati">Kiribati</option>
                                        <option @if($demande->pays == 'Kosovo') selected @endif value="Kosovo">Kosovo</option>
                                        <option @if($demande->pays == 'Koweït') selected @endif value="Koweït">Koweït</option>
                                        <option @if($demande->pays == 'Laos') selected @endif value="Laos">Laos</option>
                                        <option @if($demande->pays == 'Lesotho') selected @endif value="Lesotho">Lesotho</option>
                                        <option @if($demande->pays == 'Lettonie') selected @endif value="Lettonie">Lettonie</option>
                                        <option @if($demande->pays == 'Liban') selected @endif value="Liban">Liban</option>
                                        <option @if($demande->pays == 'Liberia') selected @endif value="Liberia">Liberia</option>
                                        <option @if($demande->pays == 'Libye') selected @endif value="Libye">Libye</option>
                                        <option @if($demande->pays == 'Liechtenstein') selected @endif value="Liechtenstein">Liechtenstein</option>
                                        <option @if($demande->pays == 'Lituanie') selected @endif value="Lituanie">Lituanie</option>
                                        <option @if($demande->pays == 'Luxembourg') selected @endif value="Luxembourg">Luxembourg</option>
                                        <option @if($demande->pays == 'Macao') selected @endif value="Macao">Macao</option>
                                        <option @if($demande->pays == 'Macédoine') selected @endif value="Macédoine">Macédoine</option>
                                        <option @if($demande->pays == 'Madagascar') selected @endif value="Madagascar">Madagascar</option>
                                        <option @if($demande->pays == 'Malaisie') selected @endif value="Malaisie">Malaisie</option>
                                        <option @if($demande->pays == 'Malawi') selected @endif value="Malawi">Malawi</option>
                                        <option @if($demande->pays == 'Maldives') selected @endif value="Maldives">Maldives</option>
                                        <option @if($demande->pays == 'Mali') selected @endif value="Mali">Mali</option>
                                        <option @if($demande->pays == 'Malte') selected @endif value="Malte">Malte</option>
                                        <option @if($demande->pays == 'Maroc') selected @endif value="Maroc">Maroc</option>
                                        <option @if($demande->pays == 'Martinique') selected @endif value="Martinique">Martinique</option>
                                        <option @if($demande->pays == 'Maurice') selected @endif value="Maurice">Maurice</option>
                                        <option @if($demande->pays == 'Mauritanie') selected @endif value="Mauritanie">Mauritanie</option>
                                        <option @if($demande->pays == 'Mayotte') selected @endif value="Mayotte">Mayotte</option>
                                        <option @if($demande->pays == 'Mexique') selected @endif value="Mexique">Mexique</option>
                                        <option @if($demande->pays == 'Micronésie') selected @endif value="Micronésie">Micronésie</option>
                                        <option @if($demande->pays == 'Moldavie') selected @endif value="Moldavie">Moldavie</option>
                                        <option @if($demande->pays == 'Monaco') selected @endif value="Monaco">Monaco</option>
                                        <option @if($demande->pays == 'Mongolie') selected @endif value="Mongolie">Mongolie</option>
                                        <option @if($demande->pays == 'Monténégro') selected @endif value="Monténégro">Monténégro</option>
                                        <option @if($demande->pays == 'Montserrat') selected @endif value="Montserrat">Montserrat</option>
                                        <option @if($demande->pays == 'Mozambique') selected @endif value="Mozambique">Mozambique</option>
                                        <option @if($demande->pays == 'Myanmar') selected @endif value="Myanmar">Myanmar</option>
                                        <option @if($demande->pays == 'Namibie') selected @endif value="Namibie">Namibie</option>
                                        <option @if($demande->pays == 'Nauru') selected @endif value="Nauru">Nauru</option>
                                        <option @if($demande->pays == 'Népal') selected @endif value="Népal">Népal</option>
                                        <option @if($demande->pays == 'Nicaragua') selected @endif value="Nicaragua">Nicaragua</option>
                                        <option @if($demande->pays == 'Niger') selected @endif value="Niger">Niger</option>
                                        <option @if($demande->pays == 'Nigeria') selected @endif value="Nigeria">Nigeria</option>
                                        <option @if($demande->pays == 'Niue') selected @endif value="Niue">Niue</option>
                                        <option @if($demande->pays == 'Norvège') selected @endif value="Norvège">Norvège</option>
                                        <option @if($demande->pays == 'Nouvelle') selected @endif value="Nouvelle-Calédonie">Nouvelle-Calédonie</option>
                                        <option @if($demande->pays == 'Nouvelle') selected @endif value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                                        <option @if($demande->pays == 'Oman') selected @endif value="Oman">Oman</option>
                                        <option @if($demande->pays == 'Ouganda') selected @endif value="Ouganda">Ouganda</option>
                                        <option @if($demande->pays == 'Ouzbékistan') selected @endif value="Ouzbékistan">Ouzbékistan</option>
                                        <option @if($demande->pays == 'Pakistan') selected @endif value="Pakistan">Pakistan</option>
                                        <option @if($demande->pays == 'Palau') selected @endif value="Palau">Palau</option>
                                        <option @if($demande->pays == 'Panama') selected @endif value="Panama">Panama</option>
                                        <option @if($demande->pays == 'Papouasie') selected @endif value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
                                        <option @if($demande->pays == 'Paraguay') selected @endif value="Paraguay">Paraguay</option>
                                        <option @if($demande->pays == 'pays') selected @endif value="pays inconnu">pays inconnu</option>
                                        <option @if($demande->pays == 'Pays') selected @endif value="Pays non précisé">Pays non précisé</option>
                                        <option @if($demande->pays == 'Pays') selected @endif value="Pays-Bas">Pays-Bas</option>
                                        <option @if($demande->pays == 'Pérou') selected @endif value="Pérou">Pérou</option>
                                        <option @if($demande->pays == 'Philippines') selected @endif value="Philippines">Philippines</option>
                                        <option @if($demande->pays == 'Pitcairn') selected @endif value="Pitcairn">Pitcairn</option>
                                        <option @if($demande->pays == 'Pologne') selected @endif value="Pologne">Pologne</option>
                                        <option @if($demande->pays == 'Polynésie') selected @endif value="Polynésie française">Polynésie française</option>
                                        <option @if($demande->pays == 'Porto') selected @endif value="Porto Rico">Porto Rico</option>
                                        <option @if($demande->pays == 'Portugal') selected @endif value="Portugal">Portugal</option>
                                        <option @if($demande->pays == 'Qatar') selected @endif value="Qatar">Qatar</option>
                                        <option @if($demande->pays == 'République') selected @endif value="République centrafricaine">République centrafricaine</option>
                                        <option @if($demande->pays == 'République') selected @endif value="République de Corée">République de Corée</option>
                                        <option @if($demande->pays == 'République') selected @endif value="République Démocratique du Congo">République Démocratique du Congo</option>
                                        <option @if($demande->pays == 'République') selected @endif value="République dominicaine">République dominicaine</option>
                                        <option @if($demande->pays == 'République') selected @endif value="République du Congo">République du Congo</option>
                                        <option @if($demande->pays == 'République') selected @endif value="République populaire démocratique de Corée">République populaire démocratique de Corée</option>
                                        <option @if($demande->pays == 'République') selected @endif value="République tchèque">République tchèque</option>
                                        <option @if($demande->pays == 'Réunion') selected @endif value="Réunion">Réunion</option>
                                        <option @if($demande->pays == 'Roumanie') selected @endif value="Roumanie">Roumanie</option>
                                        <option @if($demande->pays == 'Royaume') selected @endif value="Royaume-Uni">Royaume-Uni</option>
                                        <option @if($demande->pays == 'Russie') selected @endif value="Russie">Russie</option>
                                        <option @if($demande->pays == 'Rwanda') selected @endif value="Rwanda">Rwanda</option>
                                        <option @if($demande->pays == 'Sahara') selected @endif value="Sahara occidental">Sahara occidental</option>
                                        <option @if($demande->pays == 'Saint') selected @endif value="Saint-Barthélemy">Saint-Barthélemy</option>
                                        <option @if($demande->pays == 'Sainte') selected @endif value="Sainte-Hélène">Sainte-Hélène</option>
                                        <option @if($demande->pays == 'Saint') selected @endif value="Saint-Kitts-et-Nevis">Saint-Kitts-et-Nevis</option>
                                        <option @if($demande->pays == 'Saint') selected @endif value="Saint-Lucie">Saint-Lucie</option>
                                        <option @if($demande->pays == 'Saint') selected @endif value="Saint-Marin">Saint-Marin</option>
                                        <option @if($demande->pays == 'Saint') selected @endif value="Saint-Pierre-et-Miquelon">Saint-Pierre-et-Miquelon</option>
                                        <option @if($demande->pays == 'Saint') selected @endif value="Saint-Vincent-et-Grenadines">Saint-Vincent-et-Grenadines</option>
                                        <option @if($demande->pays == 'Salomon') selected @endif value="Salomon">Salomon</option>
                                        <option @if($demande->pays == 'Salvador') selected @endif value="Salvador">Salvador</option>
                                        <option @if($demande->pays == 'Samoa') selected @endif value="Samoa">Samoa</option>
                                        <option @if($demande->pays == 'Sao') selected @endif value="Sao Tomé et Principe">Sao Tomé et Principe</option>
                                        <option @if($demande->pays == 'Sénégal') selected @endif value="Sénégal">Sénégal</option>
                                        <option @if($demande->pays == 'Serbie') selected @endif value="Serbie">Serbie</option>
                                        <option @if($demande->pays == 'Seychelles') selected @endif value="Seychelles">Seychelles</option>
                                        <option @if($demande->pays == 'Sierra') selected @endif value="Sierra Leones">Sierra Leones</option>
                                        <option @if($demande->pays == 'Singapour') selected @endif value="Singapour">Singapour</option>
                                        <option @if($demande->pays == 'Slovaquie') selected @endif value="Slovaquie">Slovaquie</option>
                                        <option @if($demande->pays == 'Slovénie') selected @endif value="Slovénie">Slovénie</option>
                                        <option @if($demande->pays == 'Somalie') selected @endif value="Somalie">Somalie</option>
                                        <option @if($demande->pays == 'Soudan') selected @endif value="Soudan">Soudan</option>
                                        <option @if($demande->pays == 'Sri') selected @endif value="Sri Lanka">Sri Lanka</option>
                                        <option @if($demande->pays == 'Suède') selected @endif value="Suède">Suède</option>
                                        <option @if($demande->pays == 'Suisse') selected @endif value="Suisse">Suisse</option>
                                        <option @if($demande->pays == 'Surinam') selected @endif value="Surinam">Surinam</option>
                                        <option @if($demande->pays == 'Swaziland') selected @endif value="Swaziland">Swaziland</option>
                                        <option @if($demande->pays == 'Syrie') selected @endif value="Syrie">Syrie</option>
                                        <option @if($demande->pays == 'Tadjikistan') selected @endif value="Tadjikistan">Tadjikistan</option>
                                        <option @if($demande->pays == 'Taiwan') selected @endif value="Taiwan">Taiwan</option>
                                        <option @if($demande->pays == 'Tanzanie') selected @endif value="Tanzanie">Tanzanie</option>
                                        <option @if($demande->pays == 'Tchad') selected @endif value="Tchad">Tchad</option>
                                        <option @if($demande->pays == 'Thaïlande') selected @endif value="Thaïlande">Thaïlande</option>
                                        <option @if($demande->pays == 'Timor') selected @endif value="Timor oriental">Timor oriental</option>
                                        <option @if($demande->pays == 'Togo') selected @endif value="Togo">Togo</option>
                                        <option @if($demande->pays == 'Tokelau') selected @endif value="Tokelau">Tokelau</option>
                                        <option @if($demande->pays == 'Tonga') selected @endif value="Tonga">Tonga</option>
                                        <option @if($demande->pays == 'Trinité') selected @endif value="Trinité-et-Tobago">Trinité-et-Tobago</option>
                                        <option @if($demande->pays == 'Tunisie') selected @endif value="Tunisie">Tunisie</option>
                                        <option @if($demande->pays == 'Turkménistan') selected @endif value="Turkménistan">Turkménistan</option>
                                        <option @if($demande->pays == 'Turquie') selected @endif value="Turquie">Turquie</option>
                                        <option @if($demande->pays == 'Tuvalu') selected @endif value="Tuvalu">Tuvalu</option>
                                        <option @if($demande->pays == 'Ukraine') selected @endif value="Ukraine">Ukraine</option>
                                        <option @if($demande->pays == 'Uruguay') selected @endif value="Uruguay">Uruguay</option>
                                        <option @if($demande->pays == 'Vanuatu') selected @endif value="Vanuatu">Vanuatu</option>
                                        <option @if($demande->pays == 'Vatican') selected @endif value="Vatican">Vatican</option>
                                        <option @if($demande->pays == 'Venezuela') selected @endif value="Venezuela">Venezuela</option>
                                        <option @if($demande->pays == 'Viêt') selected @endif value="Viêt Nam">Viêt Nam</option>
                                        <option @if($demande->pays == 'Wallis') selected @endif value="Wallis-et-Futuna">Wallis-et-Futuna</option>
                                        <option @if($demande->pays == 'Yémen') selected @endif value="Yémen">Yémen</option>
                                        <option @if($demande->pays == 'Yémen') selected @endif value="Yémen du Sud">Yémen du Sud</option>
                                        <option @if($demande->pays == 'Zambie') selected @endif value="Zambie">Zambie</option>
                                        <option @if($demande->pays == 'Zimbabwe') selected @endif value="Zimbabwe">Zimbabwe</option>

                                    </select>
                                    <div class="wizard-form-error"></div>
                                </div>

                                <div class="form-group focus-input">
                                    <input type="text" class="form-control wizard-required" id="etablissment" name="etablissement" value="{{$demande->etablissement}}">
                                    <label for="etablissment" class="wizard-form-text-label">Établissement*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group focus-input">
                                    <input type="text" class="form-control wizard-required" id="diplome" name="diplome" value="{{$demande->diplome}}">
                                    <label for="diplome" class="wizard-form-text-label">Diplôme*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group focus-input">
                                    <input type="number" max="10"  min="1" class="form-control wizard-required" id="duree" name="dprogramme" value="{{$demande->dprogramme}}">
                                    <label for="duree" class="wizard-form-text-label">Durée du programme*(en année)</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Précedent</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset @if(5 == $demande->step) show @endif">
                                <h5>Paiement frais d'admission</h5>
                                <div class="alert alert-warning">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam asperiores cumque deleniti deserunt dignissimos dolorem eaque enim esse facere, impedit maiores, nobis, optio placeat quas quasi sint tempora velit?
                                    </p>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Précedent</a>
                                    <a href="javascript:;" class="form-wizard-submit float-right">Valider la Demande</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </section>
@else
    <section class="wizard-section">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-6">
                <div class="wizard-content-left d-flex justify-content-center align-items-center">
                    <h1>Formulaire de Pré-inscription</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-wizard">
                    <form action="" method="post" role="form" id="preregistration-form">
                        @csrf
                        <div class="form-wizard-header">
                            <input type="hidden" name="step" value="1" id="step">
                            <p>Remplissez tous les champs du formulaire pour passer à l'étape suivante</p>
                            <ul class="list-unstyled form-wizard-steps clearfix">
                                <li class="active"><span>1</span></li>
                                <li><span>2</span></li>
                                <li><span>3</span></li>
                                <li><span>4</span></li>
                                <li><span>5</span></li>
                            </ul>
                        </div>
                        <fieldset class="wizard-fieldset show">
                            <h5>Informations de contact</h5>
                            <div class="form-group">
                                <input type="text" class="form-control wizard-required" id="prenom" name="prenom">
                                <label for="prenom" class="wizard-form-text-label">Prénom*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control wizard-required" id="nom" name="nom">
                                <label for="nom" class="wizard-form-text-label">Nom*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control wizard-required" id="email" name="email">
                                <label for="email" class="wizard-form-text-label">Adresse Email*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" pattern="[0-9]{8}" class="form-control wizard-required" id="telephone" name="telephone">
                                <label for="telephone" class="wizard-form-text-label">N° de téléphone mobile*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Suivant</a>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <h5>Choix du programme</h5>
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
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Précedent</a>
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Suivant</a>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <h5>Informations personnelles</h5>
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
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Précedent</a>
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <h5>Études précédentes</h5>

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
                                <input type="text" class="form-control wizard-required" id="etablissment" name="etablissement">
                                <label for="etablissment" class="wizard-form-text-label">Établissement*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control wizard-required" id="diplome" name="diplome">
                                <label for="diplome" class="wizard-form-text-label">Diplôme*</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group">
                                <input type="number" max="10"  min="1" class="form-control wizard-required" id="duree" name="dprogramme">
                                <label for="duree" class="wizard-form-text-label">Durée du programme*(en année)</label>
                                <div class="wizard-form-error"></div>
                            </div>
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Précedent</a>
                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                            </div>
                        </fieldset>
                        <fieldset class="wizard-fieldset">
                            <h5>Paiement frais d'admission</h5>
                            <div class="alert alert-warning">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aperiam asperiores cumque deleniti deserunt dignissimos dolorem eaque enim esse facere, impedit maiores, nobis, optio placeat quas quasi sint tempora velit?
                                </p>
                            </div>
                            <div class="form-group clearfix">
                                <a href="javascript:;" class="form-wizard-previous-btn float-left">Précedent</a>
                                <a href="javascript:;" class="form-wizard-submit float-right">Valider la Demande</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function (){
        $('.select2').select2({
            placeholder: "Selectionnez Langue(s)",
        });
    });
</script>
<script>
    function loader() {
        return Swal.fire({
            title: 'Chargement...',
            html: 'Veuillez Patientez',
            timerProgressBar: true,
            onBeforeOpen: () => {
                Swal.showLoading();
            }
        });
    }
    jQuery(document).ready(function() {
        // click on next button
        jQuery('.form-wizard-next-btn').click(function() {
            var swal = loader();
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            $('#step').val(parseInt(currentActiveStep.next().find('span').text()));
            var next = jQuery(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function(){
                var thisValue = jQuery(this).val();

                if( thisValue == "") {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                    nextWizardStep = false;
                }
                else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
            if( nextWizardStep) {
                if (parseInt(currentActiveStep.next().find('span').text()) > 2) {
                    $.ajax({
                        url: '{{route('newdemande')}}',
                        method: "POST",
                        data: $('#preregistration-form').serialize(),
                        success: function(response) {
                            $('#email').attr('type', 'hidden');
                            $('#email').parent().css('display','none')
                            swal.close();
                        }
                    });
                }
                next.parents('.wizard-fieldset').removeClass("show","400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
                jQuery(document).find('.wizard-fieldset').each(function(){
                    if(jQuery(this).hasClass('show')){
                        var formAtrr = jQuery(this).attr('data-tab-content');
                        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                            if(jQuery(this).attr('data-attr') == formAtrr){
                                jQuery(this).addClass('active');
                                var innerWidth = jQuery(this).innerWidth();
                                var position = jQuery(this).position();
                                jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                            }else{
                                jQuery(this).removeClass('active');
                            }
                        });
                    }
                });
            }
            swal.close();
        });
        //click on previous button
        jQuery('.form-wizard-previous-btn').click(function() {
            var counter = parseInt(jQuery(".wizard-counter").text());;
            var prev =jQuery(this);
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            prev.parents('.wizard-fieldset').removeClass("show","400");
            prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
            currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
            $('#step').val(parseInt(currentActiveStep.prev().find('span').text()));
            jQuery(document).find('.wizard-fieldset').each(function(){
                if(jQuery(this).hasClass('show')){
                    var formAtrr = jQuery(this).attr('data-tab-content');
                    jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
                        if(jQuery(this).attr('data-attr') == formAtrr){
                            jQuery(this).addClass('active');
                            var innerWidth = jQuery(this).innerWidth();
                            var position = jQuery(this).position();
                            jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        }else{
                            jQuery(this).removeClass('active');
                        }
                    });
                }
            });
        });
        //click on form submit button
        jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
            var swal = loader();
            var parentFieldset = jQuery(this).parents('.wizard-fieldset');
            var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = jQuery(this).val();
                if( thisValue == "" ) {
                    jQuery(this).siblings(".wizard-form-error").slideDown();
                }
                else {
                    jQuery(this).siblings(".wizard-form-error").slideUp();
                }
            });
            $('#step').val(6);
            $.ajax({
                url: '{{route('newdemande')}}',
                method: "POST",
                data: $('#preregistration-form').serialize(),
                success: function(response) {
                    $('.form-wizard').html('<div class="alert alert-success"> Votre demande est envoyée avec succes </div> <a href="{{route("home")}}" class="btn form-wizard-previous-btn btn-block">Retour à la page d\'accueil</a>');
                    swal.close();
                }
            });
            swal.close();
        });
        // focus on input field check empty or not
        jQuery(".form-control").on('focus', function(){
            var tmpThis = jQuery(this).val();
            if(tmpThis == '' ) {
                jQuery(this).parent().addClass("focus-input");
            }
            else if(tmpThis !='' ){
                jQuery(this).parent().addClass("focus-input");
            }
        }).on('blur', function(){
            var tmpThis = jQuery(this).val();
            if(tmpThis == '' ) {
                jQuery(this).parent().removeClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideDown("3000");
            }
            else if(tmpThis !='' ){
                jQuery(this).parent().addClass("focus-input");
                jQuery(this).siblings('.wizard-form-error').slideUp("3000");
            }
        });
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
    });

</script>
</body>
</html>
