<?php
session_start();
include ("config.php");

if (isset($_SESSION['type'])) header("Location: intranet/index.php");
if (isset($_POST["password"])) {
    $passwort = $_POST['password'];
    if ($passwort == $Admin_Password) {
        $_SESSION['type'] = "admin";
        $_SESSION['timestamp']=time();
        header("Location: intranet/index.php");
    } else if ($passwort == $Student_Password) {
        $_SESSION['type'] = "student";
        $_SESSION['timestamp']=time();
        header("Location: intranet/index.php");
    }  else if ($passwort == $Teacher_Password) {
        $_SESSION['type'] = "teacher";
        $_SESSION['timestamp']=time();
        header("Location: intranet/index.php");
    } else $errorMessage = '<text id="error">Passwort ungültig!</text><br><br>';
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

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/global.css">

</head>

<body>
<header>
    <img src="img/Lilienfries.jpg" width="100%"/>
</header>
<div id="content">
    <div id="content-inside">
    <!-- Login Form -->
    <div id="login">
        <h2><span class="fontawesome-lock"></span>Interner Bereich</h2>
      <form method="post" action="index.php">
        <fieldset>
           <!--
           <p><label for="email">E-mail address</label></p>
           <p><input type="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p>
           -->
            <p><label for="password">Bitte Passwort eingeben</label></p>
            <p><input name="password" type="password" id="password" value="Passwort" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->
            <?php
            if(isset($errorMessage)) {
                echo $errorMessage;
            }
            ?>
            <p><input type="submit" value="Login"></p>
        </fieldset>
       </form>
    </div>
</div>
</div>
<footer class="blueBg">
    <a href="images.php">Fotodownload</a>  |
    <a href="files/Wochenendfreizeitplaner_SJ16-17.pdf">Wochenendfreizeitplanung</a>  |
    <a href="files/AG-Programm_SJ16-17.pdf">AG-Plan</a>
</footer>

</body>
</html>