<!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="app-assets/images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <h3 class="brand-text">Chemron</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="{{url('/')}}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
            </ul>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" nav-item"><a href="#"><i class="ft-book"></i></i><span class="menu-title" data-i18n="">Posts</span></a>
                        <ul class="menu-content">
                            </li>
                                <li class="active"><a class="menu-item" href="{{route('admin')}}">View Posts</a>
                            </li>
                            <li class=""><a class="menu-item" href="{{route('addPost')}}">Add Post</a>
                        </ul>
                    </li>
                </ul>

        </div>
    </div>
    <!-- END: Main Menu-->
