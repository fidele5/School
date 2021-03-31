<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AFC</title>
    <meta name="keywords" content="AFC Don bonsco" />
    <meta name="description" content="AFC Don bosco">
    <meta name="author" content="fideleplk@gmail.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="images/ico/apple-icon-120.html">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/vendor/animate/animate.min.css">
    <link rel="stylesheet" href="/vendor/linear-icons/css/linear-icons.min.css">
    <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.min.css">

    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/theme-elements.css">

    <link href="/css/calendar.css" rel="stylesheet">

    <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/layers.css">
    <link rel="stylesheet" href="/vendor/rs-plugin/css/navigation.css">

    <link rel="stylesheet" href="/css/skins/default.css">
    <script src="/master/style-switcher/style.switcher.localstorage.js"></script>

    <link rel="stylesheet" href="/css/custom.css">

    <script src="/vendor/modernizr/modernizr.min.js"></script>
</head>
<body>
    <div class="body">
        @if (Route::currentRouteName() == "home")
            <header id="header" class="header-transparent header-transparent-sticky-deactive header-container-bottom-border" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 30}">
        @else
            <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 30}">
        @endif
            <div class="header-body">
                <div class="header-container p-0">
                    <div class="header-row">
                        <div class="header-column justify-content-start">
                            <div class="header-logo border-left-0 px-4 d-lg-none">
                                <a href="#">
                                    <img src="img/logo-small.png" width="75" height="50" alt="" />
                                </a>
                            </div>
                            <ul class="header-social-icons social-icons social-icons-transparent d-none d-lg-flex px-2 px-xl-4">
                                <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="header-column justify-content-center">
                            <div class="header-nav justify-content-lg-center">
                                <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav flex-column flex-lg-row align-items-center" id="mainNav">
                                            <li class="dropdown dropdown-mega order-1">
                                                <a class="dropdown-item dropdown-toggle {{ (Route::currentRouteName() == "home")?'active':'' }}" href="{{ route("home") }}">{{ __("pages.home") }}</a>

                                            </li>
                                            <li class="dropdown dropdown-mega dropdown-mega-style-2 order-2">
                                                <a class="dropdown-item dropdown-toggle {{ (Route::currentRouteName() == "apropos")?'active':'' }}" href="{{ route("apropos") }}">
                                                    {{ __("pages.about") }}
                                                </a>
                                            </li>
                                            <li class="dropdown order-3">
                                                <a class="dropdown-item dropdown-toggle {{ (Route::currentRouteName() == "filiere")?'active':'' }}" href="{{ route("filiere") }}">
                                                    {{ __("pages.filieres") }}
                                                </a>
                                            </li>
                                            <li class="dropdown order-4">
                                                <a class="dropdown-item dropdown-toggle" >{{ __("pages.courses") }}</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ route("horaire") }}">{{ __("pages.horaire") }}</a></li>
                                                    <li><a class="dropdown-item" href="{{ route("cours") }}">{{ __("pages.courses") }}</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-mega dropdown-mega-style-2 order-5">
                                                <a class="dropdown-item dropdown-toggle {{ (Route::currentRouteName() == "calendrier")?'active':'' }}" href="{{ route("calendrier") }}">
                                                    {{ __("pages.calendar") }}
                                                </a>
                                            </li>
                                            <li class="dropdown dropdown-mega dropdown-mega-style-2 order-6">
                                                <a class="dropdown-item dropdown-toggle {{ (Route::currentRouteName() == "admission")?'active':'' }}" href="{{ route("admission") }}">
                                                    {{ __("pages.register") }}
                                                </a>
                                            </li>
                                            <li class="dropdown order-7">
                                                <a class="dropdown-item dropdown-toggle" href="#">{{ __("pages.publications") }}</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ route("actualite") }}">{{ __("pages.news") }}</a></li>
                                                    <li><a class="dropdown-item" href="{{ route("evenement") }}">{{ __("pages.events") }}</a></li>
                                                    <li><a class="dropdown-item" href="{{ route("realisation") }}">{{ __("pages.realization") }}</a></li>
                                                </ul>
                                            </li>
                                            <li class="d-none d-lg-flex order-4 px-4">
                                                <span class="header-logo border-0">
                                                <a href="index.html">
                                                <img src="img/logo-small.png" width="75" height="50" alt="" />
                                                </a>
                                                </span>
                                            </li>
                                            <li class="order-9"><a class="dropdown-item {{ (Route::currentRouteName() == "contact")?'active':'' }}" href="{{ route('contact') }}">{{ __("pages.contact") }}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-button d-none d-sm-flex px-2 px-xl-4">
                                <a href="{{ route("login") }}" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1">
                                    <span class="wrap">
                                    <span>{{ __("login") }}</span>
                                    <i class="fas fa-shopping-cart"></i>
                                    </span>
                                </a>
                            </div>
                            <button class="header-btn-collapse-nav mx-3" data-toggle="collapse" data-target=".header-nav-main nav">
                                <span class="hamburguer">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="close">
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
