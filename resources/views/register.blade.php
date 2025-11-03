<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href= {{asset('css/app.css')}}>
    <title>Регистрация</title>
</head>
<body>
<main>
    <div class="wrapper">
        <div class="login-box">
            <div class="login-box-title">
                <a href="login" class="login-title">Вход</a>
                <a href="{{ route('register') }}" class="login-title">Регистрация</a>
            </div>
            <div class="login-form">

                <form action="{{ route('register') }}" method="post" class="login-form-items">
                    @csrf
                    <input name="name" type="text" class="form-control" placeholder="Имя">
                    <input name="login" type="text" class="form-control" placeholder="Логин">
                    <input name="password" type="password" class="form-control" placeholder="Пароль">

                    <button type="submit" class="btn-success">Регистрация</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
