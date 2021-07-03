@extends('layout.app')
@section('title')
    Ecole de formation : formation profesionnelle en Tunisie
@endsection
@section('metatitle')Inovatis - Ecole de formation : formation profesionnelle en Tunisie @endsection
@section('metadescription')Ecole de  formation professionnelle privée en Tunisie,Inovatis propose des formations en BTS, BTP ou CAP de comptabilité, formalités douaniéres et commerce international en tunisie. @endsection
@section('css')
    <!-- Revolution slider -->
    <link rel="stylesheet" href="{{asset('vendor/revolution/settings.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/revolution/layers.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/revolution/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/revolution/settings-source.css')}}">
    <style>
        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }
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
        .tp-bgimg {
            opacity: 0.8 !important;
        }
        @media only screen and (max-width: 768px) {
            #au_rev_slider {
                display: none !important;
            }
            .slideshow {
                display: none !important;
            }
        }
    </style>
@endsection
@section('content')
    <!-- Slider -->
    <section class="slideshow">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="au_rev_slider" class="rev_slider fullscreenbanner slide-content" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-82" data-transition="papercut" >
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('images/mainsliderpic.webp')}}" alt="">

                    <!-- LAYERS -->
                    <div class="tp-caption tp-resizeme" data-frames='[{"delay": 500, "speed": 300, "from": "opacity: 0", "to": "opacity: 1"}, {"delay": "wait", "speed": 300, "to": "opacity: 0"}]'

                         data-x="center"
                         data-y="center"
                         data-hoffset="0"
                         data-voffset="0"
                         data-width="2000"
                         data-height="1000"
                         data-basealign="slide"
                         style="background-color: rgba(0, 0, 0, 0.5); border-radius: 5px">

                    </div>
                    <div class="tp-caption tp-resizeme slide-title center" data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":1000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-responsive="on" data-x="['right','right','right','right']" data-hoffset="['5',100,'0','0']" data-y="['center','center','center','center']" data-voffset="['-100','-100','-120','-120']" data-width="['auto', 'auto', 'auto', 'auto']"
                         data-fontsize="['45','45','35','30']" data-color="['#f2f2f2']" data-fontweight="['bold']" data-textalign="['left','left','center','center']" data-lineheight="['58','58','40','40']" >
                        INOVATIS - Formation professionnelle
                    </div>
                    <div class="tp-caption tp-resizeme slide-desc" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-responsive="on" data-x="['center','center','center','center']" data-hoffset="['5',100,'0','0']" data-y="['center','center','center','center']" data-voffset="['-4', '-4', '-20', '-20']" data-width="['550', '600', '700', '480']"
                         data-height="['auto']" data-whitespace="normal" data-type="text" data-textalign="['left','left','center','center']" data-fontsize="['25','25','25','25']" data-color="['#f2f2f2']" data-lineheight="['27','27','35','35']">
                        Le chemin de votre succès commence ici. <br> Planifiant le futur ensemble.
                    </div>
                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </section>

    <!-- Formation diplomantes -->
    <section class="our-team section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h3>Formations diplomantes</h3>
            </div>
            <div class="our-team-content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <article class="item wow fadeIn" style="height: 500px" data-wow-delay="0.1s">
                            <div class="info">
                                <h4 class="title"><a href="#">BTS</a></h4>
                                <p class="desc">
                                    Consolidez votre expérience professionnelle en ‎obtenant un BTS dans votre domaine.
                                    Notre but est de vous former pour être ‎immédiatement opérationnels et capables d’adhérer le domaine professionnel. ‎
                                </p>
                                <br>
                                <a href="{{route('bts')}}" style="font-size:12px;background-color: #1b2e51;border-radius: 5px;padding: 16px;color: #fff;">
                                    En Savoir Plus
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <article class="item wow fadeIn" style="height: 500px" data-wow-delay="0.3s">
                            <div class="info">
                                <h4 class="title"><a href="#">BTP</a></h4>
                                <p class="desc">
                                    Ce diplôme est au bout d’un parcours basé sur une expérience sur le terrain.
                                    Un ‎BTP valide des connaissances pratiques dans des domaines spécifiques.
                                    Des ‎techniciens expérimentés optent pour un BTP pour promouvoir leurs compétences ‎auprès de clients et d’employeurs potentiels.
                                </p>
                                <br>
                                <a href="{{route('btp')}}" style="font-size:12px;background-color: #1b2e51;border-radius: 5px;padding: 16px;color: #fff;">
                                    En Savoir Plus
                                </a>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <article class="item wow fadeIn" style="height: 500px" data-wow-delay="0.5s">
                            <div class="info">
                                <h4 class="title"><a href="#">CAP</a></h4>
                                <p class="desc">
                                    Le certificat d’aptitude professionnelle (CAP) est une mesure objective des connaissances, ‎des compétences et des aptitudes requises dans un domaine.
                                    Plus précisément, le diplôme ‎est un justificatif fourni pour évaluer et attester la performance d’un professionnel. ‎
                                </p>
                                <br>
                                <a href="{{route('cap')}}" style="font-size:12px;background-color: #1b2e51;border-radius: 5px;padding: 16px;color: #fff;">
                                    En Savoir Plus
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formation continues -->
    <section class="featured section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h3>Formations continues</h3>
            </div>
            <div class="featured-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/droit.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Droit
                                </h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/assurance.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Assurance
                                </h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/comptabilité.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Comptabilité
                                </h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/bureatique.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Bureautique
                                </h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/secretariat.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Secrétariat
                                </h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/commercial.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Commercial
                                </h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/marketing.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Marketing
                                </h4>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row justify-content-center mt-5">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/management.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Management
                                </h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/qualite.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Environnement et qualité
                                </h4>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/continues/hotellerie.webp')}}" alt="">
                            <div class="info">
                                <h4 style="padding: 24px 0 15px;font-size: 23px;text-align: initial;">
                                    Hôtellerie et Restauration
                                </h4>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- A propos de Inovatis -->
    <section class="aboutus-skillls section-padding-large js-waypoint wow fadeIn" data-wow-delay="0.3s">
        <div class="container">
            <div class="our-skillls-content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <img src="{{asset('images/mainsliderpic.webp')}}" alt="">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <h2 class="title">A propos de Inovatis</h2>
                        <hr>
                        <p class="desc">
                            INOVATIS a vu le jour en 2008 procurant une ouverture au monde professionnel.
                            L’accès à cet univers ‎professionnel se réalise en choisissant l’un de nos programmes de formation professionnelle proposés.
                            ‎Ces parcours permettent aux apprenants d’accéder immédiatement aux domaines les plus demandés.
                            ‎Nous visons l'excellence académique pour être perpétuellement classé au premier rang en Tunisie.‎
                            Situés en plein cœur de la ville, nos étudiants y découvrent l'effervescence de la vie estudiantine
                            ‎multiculturelle et dynamique.
                        </p>
                        <br>
                        <a href="{{route('about')}}" style="font-size:12px;background-color: #1b2e51;border-radius: 5px;padding: 16px;color: #fff;">
                            En Savoir Plus
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="featured section-padding-large">
        <div class="container">
            <div class="section-title section-title-center">
                <h3>Nos Partenaires</h3>
                <h6>Vos futurs employeurs</h6>
            </div>
            <div class="featured-content">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/partenaires/biat.webp')}}" alt="">
                        </article>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/partenaires/movenpick.webp')}}" alt="">
                        </article>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/partenaires/delice.webp')}}" alt="">
                        </article>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/partenaires/ripolin.webp')}}" alt="">
                        </article>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/partenaires/aviation.webp')}}" alt="">
                        </article>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12">
                        <article class="item">
                            <img src="{{asset('images/partenaires/ctn.webp')}}" alt="">
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contacter nous -->
    <section class="sign-up section-padding-large" id="contact">
        <div class="container">
            <div class="sign-up-content">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-3 offset-md-1 offset-xl-1 offset-lg-1 offset-sm-0">
                        <div class="sign-up-form">
                            <div class="form-heading">
                                <h1>
                                    Vous voulez nous rejoindre ?
                                </h1>
                                <p class="info pt-2">Votre démarche commence par le remplissage de se formulaire. Un conseiller pédagogique vous contactera dés la réception de vos coordonnées.</p>
                            </div>
                            <form method="POST" class="form-contact js-contact-form" action="{{route('contact')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nom" id="name" placeholder="Nom Complet">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="telephone" id="telephone" placeholder="Téléphone">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="Email*">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pays" id="pays" placeholder="Pays">
                                </div>
                                <div class="form-group">
                                    <textarea style="resize: none;" class="form-control" name="programme" id="programme" placeholder="Merci de prciser le programme de votre choix."></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" style="width:300px;font-size:12px;background-color: #1b2e51;border-radius: 5px;padding: 10px;color: #fff " class="btn">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conatct Map -->
    <section class="contact-map-1">
        <iframe async src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.8273297365645!2d10.179563514640572!3d36.79869017548559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd346d810ff3bd%3A0xe52da785022c80e8!2sINOVATIS%20FORMATION!5e0!3m2!1sfr!2stn!4v1585058766756!5m2!1sfr!2stn" height="700" frameborder="0" style="width: 100%;border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" alt="inovatis map"></iframe>
    </section>
@endsection
