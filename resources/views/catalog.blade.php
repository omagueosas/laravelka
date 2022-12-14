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
    <div class="main-category">
        <div class="header-info">
            `<div class="logo"><img src="/larapraktika/public/img/logo.png" alt=""/>`
                <p>Интернет магазин комиксов по всей России</p>
                <p>Наш номер телефона: 8-902-679-14-39</p>
                <p>Наша почта: saskakuzaw@gmail.com</p>
                <p></p>
            </div>
        </div>
        <div class="category-name"><h2>Каталог товаров</h2></div>
        <div class="catalog">
            <div class="menu-streamlining">
                <ul>
                    <li><a>Сортировать по: </a></li>
                    <li><a>Год производства</a></li>
                    <li><a>Наименование</a></li>
                    <li><a>Цена</a></li>
                </ul>
            </div>
            <div class="menu-category">
                <ul>
                    <li><a>Marvel</a></li>
                    <li><a>Dc</a></li>
                    <li><a>Other</a></li>
                </ul>
            </div>
        </div>
        <div class="product-category">
            @foreach($arr as $elem)
                <div class="product">
                    <div class="product-image"><img src="{{$elem->Image}}" alt=""/></div>
                    <div class="product-name"><p>{{$elem->Name}}</p></div>
                    <div class="product-publisher">Издатель: {{$elem->Category}}</div>
                    <div class="product-price"><p>{{$elem->Price}}</p></div>
                    <div class="product-go"><a href="/larapraktika/public/catalog/comics{{$elem->id}}">Перейти на товар</a></div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="footer">
            <p>footer</p>
        <div class="footer-menu">

        </div>
        <div class="footer-info">
            <p>Интернет магазин по всей России</p>
            <p>Наш номер телефона: 8-902-679-14-39</p>
            <p>Наша почта: saskakuzaw@gmail.com</p>
        </div>
    </div>  
</body>
</html>