<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/classy-nav.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}"/>
    <title>ادارۃ العلم میں خوش آمدید</title>
    <link rel="icon" type="image/png" href="{{asset("assets/img/logo.png")}}"/>
</head>
<body>
<div class="preloader-area">
    <div class="loader">
        <div class="dots">
            <i class="dots-item dots-item-move-down"></i> <i class="dots-item dots-item-move-left"></i> <i
                class="dots-item dots-item-move-left"></i> <i class="dots-item dots-item-move-left"></i>
            <i class="dots-item dots-item-move-left"></i> <i class="dots-item dots-item-move-down"></i> <i
                class="dots-item dots-item-move-right"></i> <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-down"></i> <i class="dots-item dots-item-move-up"></i> <i
                class="dots-item dots-item-move-down"></i> <i class="dots-item dots-item-move-up"></i> <i
                class="dots-item"></i>
            <i class="dots-item dots-item-move-down"></i> <i class="dots-item dots-item-move-up"></i> <i
                class="dots-item dots-item-move-down"></i> <i class="dots-item dots-item-move-up"></i>
            <i class="dots-item dots-item-move-left"></i> <i class="dots-item dots-item-move-left"></i> <i
                class="dots-item dots-item-move-up"></i> <i class="dots-item dots-item-move-right"></i>
            <i class="dots-item dots-item-move-right"></i> <i class="dots-item dots-item-move-right"></i> <i
                class="dots-item dots-item-move-right"></i> <i class="dots-item dots-item-move-up"></i>
        </div>
    </div>
</div>
<div class="main-header-area header-sticky">
    <div class="container">
        <div class="classy-nav-container breakpoint-off">
            <nav class="classy-navbar justify-content-between" id="EduStudyNav">
                <a class="nav-brand" href="{{ route('home') }}"><img src="{{asset('assets/img/logo.png')}}" width="110" alt="logo"/></a>
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <div class="classy-menu">
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <div class="classynav">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}"
                                   class="{{Request::url() == route('home') ? 'active' : ''}} m-3 ">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"
                                   class="{{Request::url() == route('about') ? 'active' : ''}} m-3">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('library') }}"
                                   class="{{Request::url() == route('library') ? 'active' : ''}} m-3">Library</a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}"
                                   class="{{Request::url() == route('news') ? 'active' : ''}} m-3">News</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}"
                                   class="{{Request::url() == route('contact') ? 'active' : ''}} m-3">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div id="search-area">
    <button type="button" class="close">×</button>
    <form><input type="search" value="" placeholder="Search Kewword(s)"/>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
