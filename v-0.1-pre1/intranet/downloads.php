<?php
session_start();

$idletime=180;//after 180 seconds the user gets logged out
if (time()-$_SESSION['timestamp']>$idletime){
    session_destroy();
    session_unset();
}else{
    $_SESSION['timestamp']=time();
}

?>
<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Max Klein">

    <title>Login</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/card.css">


</head>

<body>
<header>
    <img src="http://comenius.urspringschule.de/urspring/Lilienfries.jpg" width="100%"/>
</header>
<div id="content">

    <?php
    $type = $_SESSION['type'];
    if ($type == "student"){
        include ("../sites/student.php");
    } else if ($type == "teacher"){
        include ("../sites/teacher.php");
    } else header("Location: ../index.php");

    ?>
</div>
<footer class="blueBg">
        <a href="https://comenius.urspringschule.de/urspring/images.php">Fotodownload</a>  |
        <a href="https://comenius.urspringschule.de/urspring/Wochenendfreizeitplaner%20Schuljahr%202016-17.pdf">Wochenendfreizeitplanung</a>  |
        <a href="https://comenius.urspringschule.de/urspring/Urspringer%20AG-Programm%20Schuljahr%202016-2017.pdf">AG-Plan</a>
    <a href="../sites/logout.php" class="logout link">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Log out
        </a>
</footer>

</body>
</html>
