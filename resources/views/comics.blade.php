<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/larapraktika/public/css/style.css">
    <link type="Image/x-icon" href="/larapraktika/public/img/favicon.ico" rel="icon">
    <link type="image/x-icon" href="/larapraktika/public/img/favicon.ico" rel="shortcut icon">
    <title>Funny Comics Land</title>
</head>
<body>
<header>
    <ul class="ul-menu">
            <li><a href="/larapraktika/public/">Каталог</a></li>
            <li><a href="/larapraktika/public/aboutus">О нас</a></li>
            <li><a href="/larapraktika/public/tofindus">Где нас найти?</a></li>
        @if (Auth::Check())
            <li><a href="/larapraktika/public/logout">Выйти</a></li>
        @else
            <li><a href="/larapraktika/public/register">Регистрация</a></li>
            <li><a href="/larapraktika/public/login">Вход</a></li>
        @endif
    </ul>
</header>
<div class="comics-main">
        @foreach($arr as $elem)
            <div class="product-solo">
                <div class="product-solo-image"><img src="{{$elem->Image}}" alt=""/></div>
                <div class="product-info">
                    <div class="product-solo-name"><p>{{$elem->Name}}</p></div>
                    <div class="product-solo-detail">
                        <div class="detail-comics"><p>Описание комикса:</p></div>
                        <p>{{$elem->Detail}}</p>
                    </div>
                    <div class="product-solo-publisher">Издатель: {{$elem->Category}}</div>
                    <div class="product-solo-years"><p>Год выхода: {{$elem->Years}}</p></div>
                    <div class="product-solo-page"><p>Количество страниц: {{$elem->Page}}</p></div>
                </div>
                <div class="product-solo-price"><p>{{$elem->Price}}p</p></div>
                <div class="button"><a href="/larapraktika/public/"><input type="submit" value=" Заказать "></a></div>
            </div>
        @endforeach
    </div>
</body>
</html>