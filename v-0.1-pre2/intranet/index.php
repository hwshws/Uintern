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

    <title>Interner Bereich</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/card.css">


</head>

<body>
<header>
    <img src="../img/Lilienfries.jpg" width="100%"/>
</header>
<div id="content">

    <?php
    $type = $_SESSION['type'];
    if ($type == "admin"){
        include ("../sites/admin.php");
    } else if ($type == "student"){
        include ("../sites/student.php");
    } else if ($type == "teacher") {
        include ("../sites/teacher.php");
    } else header("Location: ../index.php");

    ?>
</div>
<footer class="blueBg">
    <a href="../images.php">Fotodownload</a>  |
    <a href="../files/Wochenendfreizeitplaner_SJ16-17.pdf">Wochenendfreizeitplanung</a>  |
    <a href="../files/AG-Programm_SJ16-17.pdf">AG-Plan</a>
    <a href="../sites/logout.php" class="logout link">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Log out
        </a>
</footer>

</body>
</html>
