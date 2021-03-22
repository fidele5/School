<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed  menu-light  menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="index.html">
                    <div class="brand-logo">
                        <img src="/backend/images/logo/logo.png" class="logo" alt="">
                    </div>
                    <h2 class="brand-text mb-0">ISAM</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
            <li class="nav-item ">
                <a href="{{ route('home-admin')}}" >
                    <i class="bx bx-home-alt"></i>
                    <span class="menu-title">Tableau de bord</span>
                </a>
            </li>
            <li class="navigation-header"><span>Personnes</span></li>
                <li class="nav-item">
                    <a href="#">
                        <i class="bx bxs-graduation"></i>
                        <span class="menu-title">Etudiants</span>
                    </a>
                    <ul class="menu-content">
                        <li >
                            <a href="{{ route('etudiants.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route('etudiants.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveau</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="" >
                        <i class="bx bxs-user"></i>
                        <span class="menu-title">Enseignants</span>
                    </a>
                    <ul class="menu-content">
                        <li >
                            <a href="{{ route('enseignants.index')}}" >
                                <i class="bx bx-right-arrow"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route('enseignants.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveau</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header"><span>Etudes</span></li>
                <li class="nav-item ">
                    <a href="# " >
                        <i class="bx bxs-collection"></i>
                        <span class="menu-title">Filières</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{ route('filieres.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('filieres.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="# " >
                        <i class="bx bxs-home"></i>
                        <span class="menu-title">Promotions</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{ route('promotions.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('promotions.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="# " >
                        <i class="bx bxs-calendar"></i>
                        <span class="menu-title">Horaires</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{ route('horaires.index')}}" >
                                <i class="bx bx-arrow-right-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('horaires.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveu</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="# " >
                        <i class="bx bxs-alarm"></i>
                        <span class="menu-title">Seances</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{ route('seances.index')}}" >
                                <i class="bx bx-hourglass"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('seances.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="# " >
                        <i class="bx bxs-book"></i>
                        <span class="menu-title">Cours</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{ route('courses.index')}}">
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('courses.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveau</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header"><span>Publications</span></li>
                <li class="nav-item ">
                    <a href="form-inputs.html" >
                        <i class="bx bx-list-ul"></i>
                        <span class="menu-item">Actualités</span>
                    </a>
                    <ul class="menu-content">
                        <li >
                            <a href="{{ route('actualites.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route('actualites.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="form-inputs.html" >
                        <i class="bx bxs-calendar-event"></i>
                        <span class="menu-item">Evenements</span>
                    </a>
                    <ul class="menu-content">
                        <li >
                            <a href="{{ route('evenements.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li >
                            <a href="b{{ route('evenements.create') }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveau</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item ">
                    <a href="form-inputs.html" >
                        <i class="bx bxs-calendar-check"></i>
                        <span class="menu-item">Réalisations</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{ route('realisations.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('realisations.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="navigation-header"><span>Catégories</span></li>
                    <li class="nav-item ">
                        <a href="" >
                            <i class="bx bxs-categories"></i>
                            <span class="menu-title">Actualité</span>
                        </a>
                        <ul class="menu-content">
                            <li >
                                <a href="{{ route('categorie-actualites.index')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Toutes</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('categorie-actualites.create')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Nouvelles</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a href="page-account-settings.html" >
                            <i class="bx bxs-categories"></i>
                            <span class="menu-title">Evenement</span>
                        </a>
                        <ul class="menu-content">
                            <li >
                                <a href="{{ route('categorie-evenement.index')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Toutes</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('categorie-evenement.create')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Nouvelles</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a href="#" >
                            <i class="bx bxs-categories"></i>
                            <span class="menu-title">Réalisation</span>
                        </a>
                        <ul class="menu-content">
                            <li >
                                <a href="{{ route('categorie-realisation.index')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Toutes</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route('categorie-realisation.create')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Nouvelle</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
  <!-- END: Main Menu-->
