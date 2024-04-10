<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - ТехноСклад</title>
    <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="{{route('index')}}/img/front/favicon_io/apple-touch-icon.png"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="{{route('index')}}/img/front/favicon_io/favicon-32x32.png"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="{{route('index')}}/img/front/favicon_io/favicon-16x16.png"
    />
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{route('index')}}/css/main.min.css">
    <link rel="stylesheet" href="{{route('index')}}/css/admin.css">
    <link rel="stylesheet" href="{{route('index')}}/css/style.css">
</head>
<body>

<header>
    <div class="head">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ route('index')}}/img/logo.svg" alt="">
                </div>
                <div class="col-md-10">
                    <nav>
                        <a href="#" class="toggle-mnu d-xl-none d-lg-none"><span></span></a>
                        <ul>
                            <li class="current"><a href="{{ route('index') }}" target="_blank">Перейти на сайт</a></li>
                            @guest
                                <li><a href="{{route('register')}}">Регистрация</a></li>
                                <li><a href="{{route('login')}}">Войти</a></li>
                            @endguest
                            @auth
{{--                                <li>{{ $user->name }}</li>--}}
                                <li><a href="{{ route('get-logout') }}">Выйти</a></li>
                            @endauth
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>ТехноСклад {{ date('Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{route('index')}}/js/scripts.min.js"></script>

</body>
</html>
