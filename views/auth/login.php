<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../views/template/default.php');
?>
<head>
    <title>NothingToHide Framework - Login</title>
    <link href="core/css/form.css" rel="stylesheet">
</head>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <h2 class="active">Sign In</h2>
        <h2 class="inactive underlineHover"><a href="/register">Sign Up </a></h2>
        <p> <?php
            error_reporting(E_ERROR | E_PARSE);
            echo $_POST['logError'];
            ?></p>
        <div class="fadeIn first">
            <img src="core/img/Logo.png" id="icon" alt="User Icon" />
        </div>

        <form action="/login/validate" method="post" id="login">
            <label for="login"></label><input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
            <label for="password"></label><input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>

<noscript>
    <meta http-equiv="refresh" content="0;url=nojs.html">
</noscript>