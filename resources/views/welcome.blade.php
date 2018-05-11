<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .link-tile > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 32px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .link-desc > a{
                color: #66afe9;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">首页</a>
                    @else
                        <a href="{{ url('/login') }}">{{trans('auth.login_name')}}</a>
                        <a href="{{ url('/register') }}">{{trans('auth.register_name')}}</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <span class="link-tile">
                        <a href="{{route('chat')}}">{{trans('custom.index_message_title')}}</a>

                    </span>
                </div>

                <div class="link-desc">
                    <a href="#">{{trans('custom.index_message_desc')}}</a>
                    {{--<a href="{{route('chat')}}">聊天室</a>--}}
                    {{--<a href="https://laracasts.com">Laracasts</a>--}}
                    {{--<a href="https://laravel-news.com">News</a>--}}
                    {{--<a href="https://forge.laravel.com">Forge</a>--}}
                    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
                </div>
            </div>
        </div>
    </body>
</html>
