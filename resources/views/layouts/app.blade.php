<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        #lang_sel_list {
            float: right;
            margin-top: 1.5rem;
        }
        #lang_sel_list {
            height: 32px;
            position: relative;
            z-index: 99;
            font-family: verdana, arial, sans-serif;
        }
        #lang_sel_list ul, #lang_sel_list li {
            padding: 0 !important;
            margin: 0 !important;
            float: right;
            list-style-type: none !important;
        }
        #lang_sel_list ul, #lang_sel_list li a{
            color: #636b6f;
            padding: 0 25px;
            font-size: 10px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        ul, li, ol {
            list-style: none;
            background: transparent;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
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
                    {{--<div id="lang_sel_list" class="lang_sel_list_horizontal">--}}
                        {{--<ul>--}}
                            {{--<li class="icl-zh-hans">--}}
                                {{--<a href="{{url('/zh')}}" class="lang_sel_sel">--}}
                                    {{--<img class="iclflag" src="http://make.lizhi110.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/zh-hans.png" alt="zh-hans" title="简体中文">&nbsp;--}}
                                    {{--简体中文									</a>--}}
                            {{--</li>--}}
                            {{--<li class="icl-en">--}}
                                {{--<a href="{{url('/en')}}" class="lang_sel_other">--}}
                                    {{--<img class="iclflag" src="http://make.lizhi110.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="en" title="English">&nbsp;--}}
                                    {{--English									</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">登陆</a></li>
                            <li><a href="{{ route('register') }}">注册</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
