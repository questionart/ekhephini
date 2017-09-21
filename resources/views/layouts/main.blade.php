<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style type="text/css">body, textarea, #body_ifr, .select2-multi, .select, .form-control, .form-group, #mceu_20, .mce-toolbar-grp, .mce-container, .mce-panel, .mce-stack-layout-item, .navbar, .navbar-default, .navbar-static-top,.jumbotron, .btn, .well, .row, .navbar-header{background-color: #000; text-shadow: 0px 1px 1px #fff;}</style>

    </head>
    <body class="black">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                    
                    <h1>@yield('header')</h1>
                        <hr>
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">

                        <li class="{{Request::is('/') || Request::is('posts') ? 'active' : ''}}"><a href="/">Home</a></li>
                        <li class="{{Request::is('blog') || Request::is('posts') ? 'active' : ''}}"><a href="/blog">Blog</a></li>
                        <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
                        <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="dropdown">
                                <a href="/posts" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Admin <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="posts">
                                            Login
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                     Hello {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="{{ route('posts.index') }}">Posts</a></li>

                                    <li><a href="{{ route('categories.index') }}">Categories</a></li>

                                    <li><a href="{{ route('tags.index') }}">Tags</a></li>

                                    <li role="separator" class="divider"></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>

                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        {{Auth::check() ? "Logged In" : "Logged out"}}

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
