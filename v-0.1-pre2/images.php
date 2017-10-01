<?php
session_start();

?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Max Klein">

    <title>Login</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/card.css">


</head>

<body>
<header>
    <img src="http://comenius.urspringschule.de/urspring/Lilienfries.jpg" width="100%"/>
</header>
<div id="content">
    <?php
    include ("sites/images.php");
    ?>
</div>
<footer class="blueBg">
    <a href="images.php">Fotodownload</a>  |
    <a href="files/Wochenendfreizeitplaner_SJ16-17.pdf">Wochenendfreizeitplanung</a>  |
    <a href="files/AG-Programm_SJ16-17.pdf">AG-Plan</a>
    <?php
    if(isset($_SESSION['type'])){
        echo "    <a href=\"sites/logout.php\" class=\"logout link\">
        <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> Log out
    </a>";
    }
    ?>
</footer>

</body>
</html>
