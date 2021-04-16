<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '../views/template/default.php');
?>
<head>
    <title>NothingToHide Framework - Login</title>
    <link href="core/css/form.css" rel="stylesheet">
</head>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <?php if(!isset($_COOKIE['nth_val1'])){echo '<h2 class="inactive underlineHover"><a href="/login">Sign In </a></h2>';} ?>
        <?php if(!isset($_COOKIE['nth_val1'])){echo '<h2 class="inactive underlineHover"><a href="/register">Sign Up </a></h2>';} ?>
        <?php if(isset($_COOKIE['nth_val1'])){echo '<h2 class="inactive underlineHover"><a href="/logout">Logout </a></h2>';} ?>
        <?php if(isset($_COOKIE['nth_val1'])){echo '<h2 class="inactive underlineHover"><a href="/info">Info </a></h2>';} ?>
        <?php
        if(!isset($_SESSION)){
            session_start();
        }
        if(isset($_SESSION['username'])){
            echo '<p> Witaj ' . $_SESSION['username'] . '</p>';
        }
        ?>
        <div class="fadeIn first">
            <img src="core/img/Logo.png" id="icon" alt="User Icon" />
        </div>

        <h1>It's supposed to be main page</h1>


    </div>
</div>

<noscript>
    <meta http-equiv="refresh" content="0;url=nojs.html">
</noscript>