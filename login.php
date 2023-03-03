<?php

session_start();
if(isset($_SESSION['name'])) {

    header("location:success.php");
    exit();

}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Auth Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Auth form variant 1" name="description">
    <meta content="Yuriy Grischenko" name="author">
    <!-- стили -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
 </head>
<body>
<div class="container right-panel-active">
    <!-- форма авторизации -->
    <div class="container__form container--signup">
        <form action="auth.php" class="form" id="loginform">
            <h2 class="form__title">Авторизация</h2>
            <input type="email" placeholder="Email" name="email" class="input" />
            <input type="password" placeholder="Password" name="psw" class="input" />
            <button class="btn">Вход</button>
        </form>
    </div>
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">

            </div>
            <div class="overlay__panel overlay--right">
                <div id="znak"></div>
            </div>
        </div>
    </div>
</div>
<!-- js -->
<script src="js/app.js"></script>
</body>
</html>
