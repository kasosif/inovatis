@extends('layout.app')
@section('title')
    Formation continue pour étudiant, professionnelles et entreprises
@endsection
@section('metatitle')Inovatis - Formation continue pour étudiant, professionnelles et entreprises @endsection
@section('metadescription')Ecole de formation professionnelle privé en Tunisie, inovatis propose des formations accéléré en burautique, comptabilité , gestion , marketing, secrétariat , hotellerie et restauration @endsection
@section('css')
    <style>

        .nav-link {
            color: inherit;
        }
        .nav-link.active {
            background-color: rgba(27, 46, 81, 0.8);
            color: #fff;
            border-right-color: #b4a169;
            border-right-style: solid;
            border-width: 5px;
        }
        .nav-mede.active {
            border-right-style: none;
            border-bottom-color: black;
            border-bottom-style: solid;
        }
    </style>
@endsection
@section('title')
    Formation continue
@endsection
@section('content')

    <!-- Formations continues -->
    <section class="section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h3>Nos formations continues</h3>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3 d-lg-block d-md-block d-xl-block d-none d-sm-none">
                    <ul class="nav flex-column" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#droit" role="tab" aria-controls="home" aria-selected="true">Droit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  data-toggle="tab" href="#assurance" role="tab" aria-controls="profile" aria-selected="false">Assurance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#compta" role="tab" aria-controls="contact" aria-selected="false">Comptabilité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  data-toggle="tab" href="#bureat" role="tab" aria-controls="contact" aria-selected="false">Bureatique</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 mb-3 d-lg-none d-md-none d-xl-none d-sm-block">
                    <ul class="nav nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link nav-mede active" data-toggle="tab" href="#droit" role="tab" aria-controls="droit" aria-selected="true">Droit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-mede" data-toggle="tab" href="#assurance" role="tab" aria-controls="assurance" aria-selected="false">Assurance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-mede" data-toggle="tab" href="#compta" role="tab" aria-controls="compta" aria-selected="false">Comptabilité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-mede" data-toggle="tab" href="#bureat" role="tab" aria-controls="bureat" aria-selected="false">Bureatique</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="droit" role="tabpanel" aria-labelledby="droit-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/droit.webp')}}" alt="">
                            </div>
                            <div class="row ml-5">
                                <div class="col-md-12">
                                    <h3>Droit de l'immobilier</h3>
                                    <br>
                                    <p class="desc">
                                        Court complet de 25 heures incluant :
                                        <br>- L'accessibilité aux handicapés
                                        <br>- DTU-Application des normes et régles de l'art
                                        <br>- Diagnostic immobilier
                                        <br>- NF X50-110
                                        <br>- Pathologie du batîment
                                        <br>...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="assurance" role="tabpanel" aria-labelledby="assurance-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/assurance.webp')}}" alt="">
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Assurance Automobile</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 14 heures incluant :
                                            <br>- L'assurance automobile
                                            <br>- L'assurance flotte automobile
                                            <br>- Souscription d'une assurance flotte
                                            <br>- Gestion d'une assurance flotte
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Assurance Santé</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet se 14 heureus incluant :
                                            <br>- Assurance: Maîtriser les fondamentaux
                                            <br>- Assurance vie individuelle
                                            <br>- Les contrats Multi-supports en assurance vie
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Dommage ouvrage</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 12 heures incluant :
                                            <br>- Responsabilité civile des entreprises
                                            <br>- Assurance multirisque habitation
                                            <br>- Bases de l'assurance IARD
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5 mt-5">
                                    <div class="row">
                                        <h3>Assurance de personnes</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 9 heures incluant:
                                            <br>- Assurance multirisques professionnelle
                                            <br>- Assurances collective
                                            <br>- Garanties et régime obligatoire des retraites collectives
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="compta" role="tabpanel" aria-labelledby="compta-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/comptabilité.webp')}}" alt="">
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Comptabilité générale</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 13h incluant:
                                            <br>- Initiation à la comptabilité générale
                                            <br>- Les bases de la Comptabilité générale
                                            <br>- Comptabilité pour non comptable
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">

                                        <h3>Analyse financière</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 17 heureus incluant:
                                            <br>- Credit manager: Définir des objectifs et suivre les performances
                                            <br>- Credit manager: Intégrer le crédit scoring dans la gestion des risques
                                            <br>- Optimisationdu BFR par l'évaluation du poste client
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">

                                        <h3>Recouvrement</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 17 heureus incluant:
                                            <br> -Le recouverement amiable
                                            <br> -Le recouverement contentieux
                                            <br> -Recouvrement amiable et contentieux
                                            <br> -Relance préventive
                                            <br> -Surendettement: Maîtriser la procédure
                                            <br> -Affacturage : Choisir et rentabiliser l'affacturage
                                            Recouvrement de loyers impayés
                                            <br> ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="bureat" role="tabpanel" aria-labelledby="bureat-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/bureatique.webp')}}" alt="">
                            </div>
                            <div class="row">

                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Pack Office</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 30h incluant:
                                            <br> - Office 2003
                                            <br> - Office 2007
                                            <br> - Office 2010
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Word</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 15h incluant:
                                            <br> - Outlook : Messagerie électronique
                                            <br> - Word: prise en main
                                            <br> - Word : Initiation
                                            <br> - Word : Perfectionnement
                                            <br> - Word 2007
                                            <br> - Word 2010
                                            <br> - Dactylographie
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Excel</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 22h incluant:
                                            <br> - Excel - prise en main
                                            <br> - Excel - Initiation
                                            <br> - Excel : Perfectionnement
                                            <br> - Excel 2007
                                            <br> - Excel 2010
                                            <br> - Excel Macros et VBA
                                            <br> - Excel VBA-Niveau 2
                                            <br> - VBA Excel : Aide au développement
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Access</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 12h incluant:
                                            <br> - Access  - Initiation
                                            <br> - Access  : Perfectionnement
                                            <br> - Access  : VBA
                                            <br> - Access  : VBA Perfectionnement
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Power Point</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 12h incluant:
                                            <br> - PowerPoint - prise en main
                                            <br> - PowerPoint  - Initiation
                                            <br> - Access  : Perfectionnement
                                            <br> - PowerPoint 2007
                                            <br> - PowerPoint 2010
                                            <br> - Améliorer ses présentations Powerpoint
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-8 -->
            </div>

            <div class="row mt-5">
                <div class="col-md-3 mb-3 d-lg-block d-md-block d-xl-block d-none d-sm-none">
                    <ul class="nav flex-column" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#commercial" role="tab" aria-controls="commercial" aria-selected="true">Commercial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing" aria-selected="false">Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#managem" role="tab" aria-controls="managem" aria-selected="false">Management</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 mb-3 d-lg-none d-md-none d-xl-none d-sm-block">
                    <ul class="nav nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link nav-mede active" data-toggle="tab" href="#commercial" role="tab" aria-controls="commercial" aria-selected="true">Commercial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-mede" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing" aria-selected="false">Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-mede" data-toggle="tab" href="#managem" role="tab" aria-controls="managem" aria-selected="false">Management</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="commercial" role="tabpanel" aria-labelledby="commercial-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/commercial.webp')}}" alt="">
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Négociation achats</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 8 h incluant:
                                            <br>- Outils et methodes pour acheteurs
                                            <br>- La negociation achat
                                            <br>- Les achats internationaux
                                            <br>- E-achats:technique et enjeux
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Télémarketing</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 57 h incluant:
                                            <br>- Téléphone commercial pour non commerciaux
                                            <br>- La relation clients au téléphone
                                            <br>- Acceuil téléphonique-Atelier pratique
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Grande distribution</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 25 h incluant:
                                            <br>- Mîtriser l'univer de la grande distribution
                                            <br>- L'acceuil client en magasin
                                            <br>- Hôtesse de caisse
                                            <br>- Vendeur conseil en magasin
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/marketing.webp')}}" alt="">
                            </div>
                            <div class="row ml-5">
                                <div class="col-md-12">
                                    <h3>Marketing Stratégique</h3>
                                    <br>
                                    <p class="desc">
                                        Cours complet de 20h incluant:
                                        <br> - Initiation au marketing
                                        <br> - Gestion de la relation client(GRC/CRM)
                                        <br> - Le marketing commercial
                                        <br> Intégrer la culture client dans un stratégie marketing
                                        <br> Positionnement,segmentation et céblage
                                        <br> La segmentation marketing
                                        <br> ...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="managem" role="tabpanel" aria-labelledby="managem-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/management.webp')}}" alt="">
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Gestion de Projet</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 10h incluant:
                                            <br> - Chef de projet Occasionnel
                                            <br> - La gestion des projets
                                            <br> - La gestion de projets de services
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Créativité</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 17h incluant:
                                            <br> -Initiation à la créativité
                                            <br> -Prospective et créativité
                                            <br> -Conduire une réunion de créativité
                                            <br> -Conduire une réunion de créativité-le World café Meeting
                                            <br> -Développer son leadership créative
                                            <br> -Résolution des problème avec la créativité
                                            <br> ...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Management Interculturel</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 18h incluant:
                                            <br> -Expatriation: préparer et organiser son départ
                                            <br> la communication interculturel
                                            <br> -Le management interculturel
                                            <br> -La négociation interculturel
                                            <br> -Travailler avec L'inde
                                            <br> Expatriation avec les états unis
                                            <br> -Travailler avec la chine
                                            <br> droit de la propriété industrielle et intéléctuelle en chine
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-8 -->
            </div>

            <div class="row mt-5">
                <div class="col-md-3 mb-3 d-lg-block d-md-block d-xl-block d-none d-sm-none">
                    <ul class="nav flex-column" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#secretariat" role="tab" aria-controls="secretariat" aria-selected="true">Secrétariat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#environ" role="tab" aria-controls="environ" aria-selected="false">Environnement et qualité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#chr" role="tab" aria-controls="chr" aria-selected="false">Hôtellerie et Restauration</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 mb-3 d-lg-none d-md-none d-xl-none d-sm-block">
                    <ul class="nav nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link nav-mede active" data-toggle="tab" href="#secretariat" role="tab" aria-controls="secretariat" aria-selected="true">Secrétariat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-mede" data-toggle="tab" href="#environ" role="tab" aria-controls="environ" aria-selected="false">Environnement et qualité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-mede"  data-toggle="tab" href="#chr" role="tab" aria-controls="chr" aria-selected="false">Hôtellerie et Restauration</a>
                        </li>
                    </ul>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="secretariat" role="tabpanel" aria-labelledby="secretariat-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/secretariat.webp')}}" alt="">
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Fonction assistant</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 32h incluant:
                                            <br>- Maîtriser la fonction -d'assistante
                                            <br>- Assistante de direction
                                            <br>- Assistante manager
                                            <br>- Assistante commerciale
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Accueil professionnel </h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 18h incluant:
                                            <br>- Profession hôtesse d’accueil
                                            <br>- L’accueil physique
                                            <br>- Initiation à l'accueil téléphonique
                                            <br>...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="environ" role="tabpanel" aria-labelledby="environ-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/qualite.webp')}}" alt="">
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Développement Durable</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 20h incluant:
                                            <br> -Sensibilisation au développement durable
                                            <br> -Développement durable en entreprise
                                            <br> -Développement durable et ressources humaines
                                            <br> -RSE: Responsabilité Sociale et Environnementale
                                            <br> -Les installations Classées ICPE
                                            <br> ...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Qualité</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 11h incluant:
                                            <br> -Audit interne-audit qualité
                                            <br> L'audit fournisseur
                                            <br> -Résolutions des problèmes : Outils et méthode
                                            <br> -Démarche CQQ-Coût d'obtention de la qualité
                                            <br> -HACCP pour site de production industrielle
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Industrie Chimique</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 19h incluant:
                                            <br> -Chromatographie phase gazeuze Niveau 2-CPG
                                            <br> -HPLC- Chromatographie en phase Liquide
                                            <br> -HPLC- Chromatographie en phase Liquide Haute performance Niveau 2
                                            <br> -HPLC-Chromatographie en phase Liquide Haute Performance Niveau 2
                                            <br> -HPLC:Utilisation d'un préparateur D'échantillons
                                            <br> -Dosage de l'eau par la méthode Karl Ficher
                                            <br> -GC/MS:Utilisationet dignostic des anomalies
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="chr" role="tabpanel" aria-labelledby="chr-tab">
                            <div class="row">
                                <img class="mb-5" style="width: 100%" src="{{asset('images/continues/hotellerie.webp')}}" alt="">
                            </div>
                            <div class="row">
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Hygiène et Sécurité</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 15h incluant:
                                            <br> - Mettre en place la méthode HACCP
                                            <br> - HACCP  en restauration  collective
                                            <br> - HACCP en boulangerie pâtisserie
                                            <br> - HACCP en boucherie
                                            <br> - Maitriser la méthode Haccp pour mieux vendre
                                            <br> - Hygiéne et sécurité  en hôtellerie
                                            <br> - Hygiéne et sécurité  dans un bar
                                            <br> ...
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Service et à acceuil</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 20h incluant:
                                            <br> - Le service en salle
                                            <br> - Service en salle -Perfectionnement
                                            <br> - Service en salle (Animation dispensée pendant le service
                                            <br> - Service du petit déjeuner
                                            <br> - Acceil et service de qualité en CHR
                                            <br> - Acceil en restauration
                                            <br> - L'acceil en hôtel de luxe
                                            <br> ...

                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-3 ml-5">
                                    <div class="row">
                                        <h3>Cuisine</h3>
                                        <br>
                                        <p class="desc">
                                            Cours complet de 20h incluant:
                                            <br> - Créativité culinaire: Concept et principes
                                            <br> - Démarche qualité en production culinaire
                                            <br> - Cuisine  créative :la volaille
                                            <br> - Cuisine  créative :le poisson
                                            <br> - Cuisson des viandes ,sauces et jus
                                            <br> - Cuisson des poissons et sauces
                                            <br> - Cuisine diététique
                                            <br> ...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-8 -->
            </div>
        </div>
    </section>

@endsection

@section('js')
@endsection
