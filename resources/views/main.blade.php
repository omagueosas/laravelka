<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verst</title>
    <link rel="stylesheet" href="/LaravelkaPara/public/css/style.css">
</head>
<body>
    <header>
        <div class="header">
            <img src="/LaravelkaPara/public/img/logo.jpg">
            <a href="#catalog">Каталог</a>
            <a href="#about">О нас</a>
            <a href="#location">Где нас найти?</a>
            @if (Auth::check())
                <a href="/LaravelkaPara/public/logout">Выйти</a>
            @else
                <a href="/LaravelkaPara/public/register">Регистрация</a>
                <a href="/LaravelkaPara/public/login">Авторизация</a>
            @endif
        </div>
    </header>

    <div class="main">
        <a href="#marvel">MARVEL</a>
        <a href="#dc">DC</a>
        <a href="#other">OTHER</a>
    </div>

    <div class="catalog">
    @foreach ($arr as $elem)
        <p>{{$elem->Name}}</p>
        <p>{{$elem->Detail}}</p>
        <p>{{$elem->Price}}</p>
        <p>{{$elem->Years}}</p>
        <img src="{{$elem->Image}}">
        <p>{{$elem->Page}}</p>
        <p>{{$elem->Category}}</p>
    @endforeach 
    </div>

</body>
</html>