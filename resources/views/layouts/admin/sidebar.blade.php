<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed  menu-light  menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="index.html">
                    <div class="brand-logo">
                        <img src="/backend/images/logo/logo.png" class="logo" alt="">
                    </div>
                    <h2 class="brand-text mb-0">Frest</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
            <li class="nav-item ">
                <a href="index-2.html" >
                    <i class="bx bx-home-alt"></i>
                    <span class="menu-title">Dashboard</span>
                    <span class="badge badge-light-danger badge-pill badge-round float-right mr-2">2</span>
                </a>
                <ul class="menu-content">
                    <li class=active>
                        <a href="/" >
                            <i class="bx bx-right-arrow-alt"></i>
                            <span class="menu-item">Main</span>
                        </a>
                    </li>
                    <li>
                        <a href="/admin/" >
                        <i class="bx bx-right-arrow-alt"></i>
                        <span class="menu-item">Analytics</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="navigation-header"><span>Medias</span></li>
                <li class="nav-item ">
                    <a href="# " >
                        <i class="bx bx-video"></i>
                        <span class="menu-title">Videos</span>
                    </a>
                    <ul class="menu-content">
                        <li >
                            <a href="{{ route("videos.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Videos </span>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route("videos-tube.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Youtube</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a href="{{ route("pictures.index") }}" >
                        <i class="bx bx-image-alt"></i>
                        <span class="menu-title">Photos</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route("documents.index") }}" >
                        <i class="bx bx-book"></i>
                        <span class="menu-title">Documents</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="app-file-manager.html" >
                        <i class="bx bx-save"></i>
                        <span class="menu-title">File Manager</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="# " >
                        <i class='bx bx-tag'></i>
                        <span class="menu-title">Categories</span>
                    </a>
                    <ul class="menu-content">
                        <li >
                            <a href="{{ route("categories-photo.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Photos </span>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route("categories.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Actualite</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header"><span>Utilisateurs</span></li>
                <li class="nav-item ">
                    <a href="# " >
                        <i class="bx bx-repeat"></i>
                        <span class="menu-title">Comptes</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a href="{{ route("confreres.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Confreres</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route("users.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Visiteurs</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="navigation-header"><span>Publications</span></li>
                <li class="nav-item ">
                    <a href="form-inputs.html" >
                        <i class="bx bx-edit"></i>
                        <span class="menu-item">publier</span>
                    </a>
                    <ul class="menu-content">
                        <li >
                            <a href="{{ route("articles.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Articles</span>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route("actualites.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Actualites</span>
                            </a>
                        </li>
                        <li >
                            <a href="{{ route("commentaires.index") }}" >
                                <i class="bx bx-right-arrow-alt"></i>
                                <span class="menu-item">Commentaires</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="navigation-header"><span>Pages</span></li>
                    <li class="nav-item ">
                        <a href="{{ route("communautes.index") }}" >
                            <i class="bx bx-user"></i>
                            <span class="menu-title">Communautes</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="page-account-settings.html" >
                            <i class="bx bx-wrench"></i>
                            <span class="menu-title">Account Settings</span>
                        </a>
                        <ul class="menu-content">
                            <li >
                                <a href="{{ route("settings.create") }}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">general</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route("roles.index") }}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">roles</span>
                                </a>
                            </li>
                            <li >
                                <a href="{{ route("languages.index") }}" >
                                    <i class="bx bx-right-arrow-alt"></i>
                                    <span class="menu-item">language</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
  <!-- END: Main Menu-->
