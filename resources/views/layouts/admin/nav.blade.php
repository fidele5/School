    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar bg-dark navbar-with-menu fixed-top" data-bgcolor="bg-dark">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">

                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                    </ul>
                    <ul class="nav navbar-nav">
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                            <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                            <ul class="search-list"></ul>
                        </div>
                        </li>
                    </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                        <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                        <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                        <div class="search-input-close"><i class="bx bx-x"></i></div>
                        <ul class="search-list"></ul>
                        </div>
                    </li>

                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                        <div class="user-nav d-sm-flex d-none">
                                <span class="user-name">{{ Auth::user()->email}}</span>
                            <span class="user-status text-muted">Available</span>
                        </div>
                        <span><img class="round" src="/backend/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                        <a class="dropdown-item" href="page-user-profile.html">
                            <i class="bx bx-user mr-50"></i> Edit Profile
                        </a>
                        <a class="dropdown-item" href="app-email.html">
                            <i class="bx bx-envelope mr-50"></i> My Inbox
                        </a>
                        <a class="dropdown-item" href="app-todo.html">
                            <i class="bx bx-check-square mr-50"></i> Task</a>
                            <a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats
                        </a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off mr-50"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->
