<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="@yield('metatitle')">
    <meta name="description" content="@yield('metadescription')">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <title>Inovatis - @yield('title') </title>

    <!-- Bootstrap -->
    <link defer="1" rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">

    <!-- Font Icon -->
    <link defer="1" rel="stylesheet" href="{{asset('fonts/font-awesome-5/css/fontawesome-all.min.css')}}">

    <!-- Vendor CSS -->
    <link defer="1" rel="stylesheet" href="{{asset('vendor/css-hamburgers/dist/hamburgers.min.css')}}">

    <!-- Main CSS File -->
    <link defer="1" href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <style>
        .btn-demande {
            font-size:12px;
            background-color: #1b2e51;
            border-radius: 5px;
            padding: 16px;
            color: #fff;
        }
        .btn-preinscription {
            font-size:12px;
            border-radius: 5px;
            padding: 16px;
            color: #000;
            border: groove #1b2e51;
        }
    </style>
    @yield('css')
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TMP33N"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

{{--@section('preloader')--}}
{{--    <!-- page load-->--}}
{{--    <div class="images-preloader">--}}
{{--        <div id="preloader_1 spinner1" class="spinner1 rectangle-bounce">--}}
{{--            <div class="double-bounce1"></div>--}}
{{--            <div class="double-bounce2"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@show--}}

<!-- Header page -->
<header class="header">
    <div class="header-bottom hidden-tablet-landscape" id="js-navbar-fixed">
        <div class="container">
            <div class="header-bottom">
                <div class="header-bottom-content display-flex">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{asset('images/linovatis-logo.webp')}}" style="width: 150px;padding-bottom: 7px;" alt="INOVATIS">
                        </a>
                    </div>
                    <div class="menu-search display-flex">
                        <nav class="menu">
                            <div>
                                <ul class="menu-primary">
                                    <li class="menu-item ">
                                        <a href="{{route('about')}}">A propos</a>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="#">Nos Formations</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{route('bts')}}">BTS</a></li>
                                            <li class="menu-item"><a href="{{route('btp')}}">BTP</a></li>
                                            <li class="menu-item"><a href="{{route('cap')}}">CAP</a></li>
                                            <li class="menu-item"><a href="{{route('free-training')}}">Formation continue</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="#">Espace étudiant</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="{{route('international-student')}}">Etudiant International</a></li>
                                            <li class="menu-item"><a href="{{route('required-documents')}}">Documents Requis</a></li>
                                            <li class="menu-item"><a href="{{route('faq')}}">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="{{route('home')}}#contact">Contactez nous</a>
                                    </li>
                                    <li class="menu-item ">
                                        <a href="{{route('preregistration')}}" style="font-size:12px;background-color: #1b2e51;border-radius: 5px;padding: 16px;color: #fff" >
                                            Pré-inscription En Ligne
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden-tablet-landscape-up header-mobile">
        <div class="header-top-mobile">
            <div class="container-fluid">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('images/linovatis-logo.webp')}}" style="width: 150px" alt="INNOVATIS">
                    </a>
                </div>
                <button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="au-nav-mobile">
            <nav class="menu-mobile">
                <div>
                    <ul class="au-navbar-menu">
                        <li class="menu-item ">
                            <a href="{{route('about')}}">A propos</a>
                        </li>
                        <li class="menu-item ">
                            <a href="#">Nos Formations</a>
                            <span class="arrow">
                                    <i></i>
                                </span>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{route('bts')}}" >BTS</a></li>
                                <li class="menu-item"><a href="{{route('btp')}}" >BTP</a></li>
                                <li class="menu-item"><a href="{{route('cap')}}">CAP</a></li>
                                <li class="menu-item"><a href="{{route('free-training')}}">Formation continue</a></li>
                            </ul>
                        </li>
                        <li class="menu-item ">
                            <a href="#">Espace étudiant</a>
                            <span class="arrow">
                                    <i></i>
                                </span>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="{{route('international-student')}}">Etudiant International</a></li>
                                <li class="menu-item"><a href="{{route('required-documents')}}">Documents Requis</a></li>
                                <li class="menu-item"><a href="{{route('faq')}}">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="menu-item ">
                            <a href="{{route('home')}}#contact">Contactez nous</a>
                        </li>
                        <li class="menu-item text-center pt-4 pb-4">
                            <a href="{{route('preregistration')}}" class="btn" style="background-color: #1b2e51;border-radius: 5px;padding: 16px;color: #fff" >
                                Pré-inscription En Ligne
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="clear"></div>
    </div>
</header>

<main>
    @yield('content')
</main>

<!-- Footer page -->
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-info">
                        <div class="footer-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('images/linovatis-logo-white.webp')}}" style="width: 200px" alt="INNOVATIS">
                            </a>
                        </div>
                        <p class="footer-intro">
                            Institut Privée des formations Professionnelles
                            <br> Adresse: 12 Avenue de Carthage , 2 ème étage.
                            <br> Tel:71 240 590 / GSM:54 634 114
                        </p>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 footer-menu">
                        <div class="footer-title">
                            <h4>Accès Rapide</h4>
                        </div>
                        <div class="footer-link-menu">
                            <ul>
                                <li><a href="{{route('about')}}"><i class="fa fa-angle-right"></i>A propos</a></li>
                                <li><a href="{{route('cap')}}"><i class="fa fa-angle-right"></i>Diplome CAP</a></li>
                                <li><a href="{{route('bts')}}"><i class="fa fa-angle-right"></i>Diplome BTS</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{route('btp')}}"><i class="fa fa-angle-right"></i>Diplome BTP</a></li>
                                <li><a href="{{route('free-training')}}"><i class="fa fa-angle-right"></i>Formation continue</a></li>
                                <li><a href="{{route('preregistration')}}"><i class="fa fa-angle-right"></i>Pré-inscription</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 footer-info">
                        <div class="footer-title">
                            <h4>SUIVEZ NOUS</h4>
                        </div>
                        <div class="socials">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                 <div class="row">
                     <div class="col-md-6">
                         <p class="copyright">Copyright @ 2019</p>
                     </div>
                     <div class="col-md-6">
                         <p class="copyright text-right">All Rights Reserved</p>
                     </div>
                 </div>

            </div>
        </div>
    </div>
</footer>

<!-- Back to top -->
<div id="back-to-top">
    <i class="fa fa-angle-up"></i>
</div>

<!-- JS -->

<!-- Jquery and Boostrap library -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>


<!-- Vendor JS -->
<script src="{{asset('vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<script src='{{asset('vendor/wow/dist/wow.min.js')}}'></script>

<!-- Form JS -->
<script src="{{asset('js/validate-form.js')}}"></script>
<script src="{{asset('js/config-contact.js')}}"></script>

<!-- REVOLUTION JS FILES -->
<script src="{{asset('vendor/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendor/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>

@yield('js')

</body>

</html>
