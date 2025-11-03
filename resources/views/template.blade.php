<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href= {{asset('css/app.css')}}>
    @yield('title')
</head>
<body>
<header>
    <div class="container">

        <div class="header-wrap">
                @auth
            <div class="header-user-role">
                <p class="user-role">{{ auth()->user()->name }}</p>
            </div>
            <div class="header-items-wrap">
                <a class="button-logout" href="{{ route('logout') }}">Выйти</a>
                <a class="header-item" href="{{ route('division') }}">Подразделение</a>
                <a class="header-item" href="{{ route('rooms') }}">Помещение</a>
                <a class="header-item" href="{{ route('list') }}">Абоненты</a>

                @yield('add-button')

                @else
                <a href="{{ route('login') }}" class="header-item" >Войти</a>
                <a href="{{ route('register') }}" class="header-item" >Регистрация</a>

            </div>
                @endauth

        </div>

    </div>
</header>

<main>
    @yield('content')

</main>
</body>
</html>
