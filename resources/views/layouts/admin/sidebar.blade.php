<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-collapsed-open menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="/">
                    <div class="brand-logo">
                        <img src="/{{ get_option("app_logo") }}" class="logo" alt="">
                    </div>
                    <h2 class="brand-text mb-0">{{ get_option("app_name") }}</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
            <li class="nav-item @if($selected_item == "home") active @endif">
                <a href="{{ route('home-admin')}}" >
                    <i class="bx bx-home-alt"></i>
                    <span class="menu-title">Tableau de bord</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('home')}}" >
                    <i class="bx bx-left-arrow-circle"></i>
                    <span class="menu-title">Accueil client</span>
                </a>
            </li>
            <li class="navigation-header"><span>Personnes</span></li>
            <li class="nav-item @if($selected_item == "enseignants") active @endif">
                <a href="" >
                    <i class="bx bxs-user"></i>
                    <span class="menu-title">Enseignants</span>
                </a>
                <ul class="menu-content">
                    <li @if($selected_sub_item == "all" AND $selected_item == "enseignants")class="active" @endif>
                        <a href="{{ route('enseignants.index')}}" >
                            <i class="bx bx-right-arrow-alt"></i>
                            <span class="menu-item">Tous</span>
                        </a>
                    </li>
                    <li @if($selected_sub_item == "new" AND $selected_item == "enseignants")class="active" @endif>
                        <a href="{{ route('enseignants.create')}}" >
                            <i class="bx bx-right-arrow-alt"></i>
                            <span class="menu-item">Nouveau</span>
                        </a>
                    </li>
                </ul>
            </li>
                <li class="nav-item @if($selected_item == "etudiants") active @endif">
                    <a href="#">
                        <i class="bx bxs-graduation"></i>
                        <span class="menu-title">Etudiants</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "etudiants")class="active" @endif>
                            <a href="{{ route('etudiants.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "etudiants")class="active" @endif>
                            <a href="{{ route('etudiants.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveau</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="navigation-header"><span>Etudes</span></li>
                <li class="nav-item @if($selected_item == "cours") active @endif">
                    <a href="# " >
                        <i class="bx bxs-book"></i>
                        <span class="menu-title">Cours</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "cours")class="active" @endif>
                            <a href="{{ route('courses.index')}}">
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "cours")class="active" @endif>
                            <a href="{{ route('courses.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveau</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @if($selected_item == "cycles") active @endif">
                    <a href="#" >
                        <i class="bx bxs-collection"></i>
                        <span class="menu-title">Cycles</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "cycles")class="active" @endif>
                            <a href="{{ route('cycles.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "cycles")class="active" @endif>
                            <a href="{{ route('cycles.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @if($selected_item == "filieres") active @endif">
                    <a href="# " >
                        <i class="bx bxs-collection"></i>
                        <span class="menu-title">Filières</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "filieres")class="active" @endif>
                            <a href="{{ route('filieres.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "filieres")class="active" @endif>
                            <a href="{{ route('filieres.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($selected_item == "horaires") active @endif">
                    <a href="# " >
                        <i class="bx bxs-calendar"></i>
                        <span class="menu-title">Horaires</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "horaires")class="active" @endif>
                            <a href="{{ route('horaires.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "horaires")class="active" @endif>
                            <a href="{{ route('horaires.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveu</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($selected_item == "promotions") active @endif">
                    <a href="# " >
                        <i class="bx bxs-home"></i>
                        <span class="menu-title">Promotions</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "promotions")class="active" @endif>
                            <a href="{{ route('promotions.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "promotions")class="active" @endif>
                            <a href="{{ route('promotions.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($selected_item == "resultats") active @endif">
                    <a href="# " >
                        <i class="bx bx-award"></i>
                        <span class="menu-title">Résultats</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "resultats")class="active" @endif>
                            <a href="{{ route('resultats.index')}}">
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "resultats")class="active" @endif>
                            <a href="{{ route('resultats.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveau</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($selected_item == "seances") active @endif">
                    <a href="# " >
                        <i class="bx bxs-alarm"></i>
                        <span class="menu-title">Seances</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "seances")class="active" @endif>
                            <a href="{{ route('seances.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "seances")class="active" @endif>
                            <a href="{{ route('seances.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="navigation-header"><span>Publications</span></li>
                <li class="nav-item @if($selected_item == "publications_actualites") active @endif">
                    <a href="form-inputs.html" >
                        <i class="bx bx-list-ul"></i>
                        <span class="menu-item">Actualités</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "publications_actualites")class="active" @endif>
                            <a href="{{ route('actualites.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "publications_actualites")class="active" @endif>
                            <a href="{{ route('actualites.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @if($selected_item == "publications_evenements") active @endif">
                    <a href="form-inputs.html" >
                        <i class="bx bxs-calendar-event"></i>
                        <span class="menu-item">Evenements</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "publications_evenements")class="active" @endif>
                            <a href="{{ route('evenements.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Tous</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "publications_evenements")class="active" @endif>
                            <a href="{{ route('evenements.create') }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouveau</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item @if($selected_item == "publications_realisations") active @endif">
                    <a href="form-inputs.html" >
                        <i class="bx bxs-calendar-check"></i>
                        <span class="menu-item">Réalisations</span>
                    </a>
                    <ul class="menu-content">
                        <li @if($selected_sub_item == "all" AND $selected_item == "publications_realisations")class="active" @endif>
                            <a href="{{ route('realisations.index')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Toutes</span>
                            </a>
                        </li>
                        <li @if($selected_sub_item == "new" AND $selected_item == "publications_realisations")class="active" @endif>
                            <a href="{{ route('realisations.create')}}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Nouvelle</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="navigation-header"><span>Catégories</span></li>
                    <li class="nav-item @if($selected_item == "categories_actualites") active @endif">
                        <a href="" >
                            <i class="bx bxs-categories"></i>
                            <span class="menu-title">Actualité</span>
                        </a>
                        <ul class="menu-content">
                            <li @if($selected_sub_item == "all" AND $selected_item == "categories_actualites")class="active" @endif>
                                <a href="{{ route('categorie-actualites.index')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Toutes</span>
                                </a>
                            </li>
                            <li @if($selected_sub_item == "new" AND $selected_item == "categories_actualites")class="active" @endif>
                                <a href="{{ route('categorie-actualites.create')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Nouvelles</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item @if($selected_item == "categories_evenements") active @endif">
                        <a href="page-account-settings.html" >
                            <i class="bx bxs-categories"></i>
                            <span class="menu-title">Evenement</span>
                        </a>
                        <ul class="menu-content">
                            <li @if($selected_sub_item == "all" AND $selected_item == "categories_evenements")class="active" @endif>
                                <a href="{{ route('categorie-evenements.index')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Toutes</span>
                                </a>
                            </li>
                            <li @if($selected_sub_item == "new" AND $selected_item == "categories_evenements")class="active" @endif>
                                <a href="{{ route('categorie-evenements.create')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Nouvelles</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item @if($selected_item == "categories_realisations") active @endif">
                        <a href="#" >
                            <i class="bx bxs-categories"></i>
                            <span class="menu-title">Réalisation</span>
                        </a>
                        <ul class="menu-content">
                            <li>
                                <a href="{{ route('categorie-realisations.index')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Toutes</span>
                                </a>
                            </li>
                            <li @if($selected_sub_item == "new" AND $selected_item == "categories_realisations")class="active" @endif>
                                <a href="{{ route('categorie-realisations.create')}}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">Nouvelle</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href="page-account-settings.html" >
                            <i class="bx bx-wrench"></i>
                            <span class="menu-title">{{ __("pages.site_settings") }}</span>
                        </a>
                        <ul class="menu-content">
                            <li >
                                <a href="{{ route("settings.create") }}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">{{ __("pages.general") }}</span>
                                </a>
                            </li>

                            <li >
                                <a href="{{ route("languages.index") }}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">{{ __("pages.language") }}</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
  <!-- END: Main Menu-->
