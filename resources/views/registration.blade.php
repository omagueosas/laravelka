<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/larapraktika/public/css/style.css">
    <title>Document</title>
</head>
<body>
<header>
</header>

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Введите имя пользователя" name="uname" required>

    <label for="sname"><b>Surname</b></label>
    <input type="text" placeholder="Введите фамилию (не обязательно)" name="sname">

    <label for="login"><b>Login</b></label>
    <input type="text" placeholder="Введите логин" name="login" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Введите Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Введите пароль" name="psw" required>

    <label for="pswrep"><b>●	password_repeat </b></label>
    <input type="password" placeholder="Введите пароль" name="pswrep" required>

    <label><input type="checkbox" checked="checked" name="remember"> Rules</label>

    <button type="submit">Login</button>

</body>
</html>