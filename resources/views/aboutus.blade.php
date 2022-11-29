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
    <div class="slogan">
        <div class="slogan-img"><img src=""></div>
        <div class="slogan-txt">
            <h1></h1>
            <p></p>
        </div>
    </div>
        <div class="category-name"><h2>Новинки магазина</h2></div>

        <div class="product-category">
            <div class="product">
                <div class="image"><img src="" alt=""/></div>
                <div class="name"><p>Человек паук</p></div>
                <div class="publisher">Издатель: Марвел</div>
                <div class="price"><p>1000р</p></div>
                <div class="go"><a href="">Перейти на товар</a></div>
            </div>
            <div class="product">
                <div class="image"><img src="" alt=""/></div>
                <div class="name"><p>Человек паук</p></div>
                <div class="publisher">Издатель: Марвел</div>
                <div class="price"><p>1000р</p></div>
                <div class="go"><a href="">Перейти на товар</a></div>
            </div>
            <div class="product">
                <div class="image"><img src="" alt=""/></div>
                <div class="name"><p>Человек паук</p></div>
                <div class="publisher">Марвел</div>
                <div class="price"><p>1000р</p></div>
                <div class="go"><a href="">Перейти на товар</a></div>
            </div>
            <div class="product">
                <div class="image"><img src="" alt=""/></div>
                <div class="name"><p>Человек паук</p></div>
                <div class="publisher">Издатель: Марвел</div>
                <div class="price"><p>1000р</p></div>
                <div class="go"><a href="">Перейти на товар</a></div>
            </div>
            <div class="product">
                <div class="image"><img src="" alt=""/></div>
                <div class="name"><p>Человек паук</p></div>
                <div class="publisher">Издатель: Марвел</div>
                <div class="price"><p>1000р</p></div>
                <div class="go"><a href="">Перейти на товар</a></div>
            </div>
        </div>
    </div>

    <div class="footer">
            <p>footer</p>
    </div>  
</body>
</html>