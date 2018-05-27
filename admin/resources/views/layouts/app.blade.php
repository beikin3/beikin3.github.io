<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> @yield('css')
</head>

<body>

    <div class="page">
        <!-- Main Navbar-->
        <header class="header">
            <nav class="navbar">
                <!-- Search Box-->
                <!-- <div class="search-box">
                    <button class="dismiss">
                        <i class="icon-close"></i>
                    </button>
                    <form id="searchForm" action="#" role="search">
                        <input type="search" placeholder="What are you looking for..." class="form-control">
                    </form>
                </div> -->
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand -->
                            <a href="{{ route('home') }}" class="navbar-brand d-none d-sm-inline-block">
                                <div class="brand-text d-none d-lg-inline-block">
                                    <span>Beikin </span>
                                </div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none">
                                    <strong>BD</strong>
                                </div>
                            </a>
                            <!-- Toggle Button-->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <!-- <li class="nav-item d-flex align-items-center">
                                <a id="search" href="#">
                                    <i class="icon-search"></i>
                                </a>
                            </li> -->
                            <!-- Notifications-->
                            <li class="nav-item dropdown">
                                <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link">
                                    <i class="far fa-bell"></i>
                                    <span class="badge bg-red badge-corner">12</span>
                                </a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item">
                                            <div class="notification">
                                                <div class="notification-content">
                                                    <i class="far fa-envelope bg-green"></i>You have 6 new messages </div>
                                                <div class="notification-time">
                                                    <small>4 minutes ago</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong>view all notifications </strong>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Messages                        -->
                            <li class="nav-item dropdown">
                                <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link">
                                    <i class="far fa-envelope"></i>
                                    <span class="badge bg-orange badge-corner"></span>
                                </a>
                                <ul aria-labelledby="notifications" class="dropdown-menu">
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                            <div class="msg-profile">
                                                <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle">
                                            </div>
                                            <div class="msg-body">
                                                <h3 class="h5">Jason Doe</h3>
                                                <span>Sent You Message</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                            <strong>Read all messages </strong>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Logout    -->
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link logout" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
                                    <span class="d-none d-sm-inline">Logout</span>
                                    <i class="far fa-sign-out"></i>
                                </a>
                                <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>


        <div class="page-content d-flex align-items-stretch">
            @auth
            <!-- Side Navbar -->
            <nav class="side-navbar">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center">
                    <!-- <div class="avatar">
                        <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle">                        
                    </div> -->
                    <div class="title">
                        @auth
                        <h1 class="h4">{{ Auth::user()->name }}</h1>
                        @endauth
                        <!-- <p>Web Designer</p> -->
                    </div>
                </div>
                <!-- Sidebar Navidation Menus-->
                <!-- <span class="heading">Main</span> -->
                <ul class="list-unstyled">
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{ route('home') }}"><i class="fas fa-home"></i>Dashboard</a>
                    </li>
                    <li class="{{ Request::is('clientes*') ? 'active' : '' }}">
                        <a href="{{ route('clientes.index') }}"><i class="fas fa-user-tie"></i>Clientes</a>
                    </li>
                </ul>
            </nav>
            @endauth

            <div class="content-inner">
                @yield('content')                
            </div>
        </div>
    </div>

    @yield('scripts')
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>
