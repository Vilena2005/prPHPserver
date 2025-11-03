<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href= {{asset('css/app.css')}}>
    <title>Вход</title>
</head>
<body>
<main>
    <div class="wrapper">
        <div class="login-box">
            <div class="login-box-title">
                <a href="{{ route('login') }}" class="login-title">Вход</a>
                <a href="{{ route('register') }}" class="login-title">Регистрация</a>
            </div>
            <div class="login-form">
                <form action="{{ route('login') }}" method="post" class="login-form-items">
                    @csrf
                    <input name="login" type="text" class="form-control" placeholder="Логин">
                    <input name="password" type="password" class="form-control" placeholder="Пароль">

                    <button type="submit" class="btn-success">Вход</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
