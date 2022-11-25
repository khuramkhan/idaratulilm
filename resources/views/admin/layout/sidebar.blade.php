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

            </ul>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" nav-item"><a href="#"><i class="ft-book"></i></i><span class="menu-title" data-i18n="">Posts</span></a>
                        <ul class="menu-content">
                            <li><li class="{{Request::url() == route('post') ? 'active' : ''}}"><a class="menu-item" href="{{route('post')}}">View Posts</a></li>
                            <li class="{{Request::url() == route('addPost') ? 'active' : ''}}"><a class="menu-item" href="{{route('addPost')}}">Add Post</a></li>
                        </ul>
                    </li>
                    <li class=" nav-item"><a href="#"><i class="ft-share"></i></i><span class="menu-title" data-i18n="">News</span></a>
                        <ul class="menu-content">
                            <li class="{{Request::url() == route('viewNews') ? 'active' : ''}}"><a class="menu-item" href="{{route('viewNews')}}">View News</a></li>
                            <li class="{{Request::url() == route('addNews') ? 'active' : ''}}"><a class="menu-item" href="{{route('addNews')}}">Add News</a></li>
                        </ul>
                    </li>
                </ul>

        </div>
    </div>
    <!-- END: Main Menu-->
