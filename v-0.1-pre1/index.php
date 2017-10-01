<?php
session_start();

if ($_SESSION == 1) include ("sites/student.php");
else if ($_SESSION == 2) include ("sites/teacher.php");

if (isset($_POST["password"])) {
    $passwort = $_POST['password'];

    if ($passwort == "Mars") {
        $_SESSION["login"] = 1;
    } else if ($passwort == "Achtopf") {
        $_SESSION["login"] = 2;
        include_once ("sites/teacher.php");
    } else $errorMessage = 'E-Mail oder Passwort ungültig!<br>';

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

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="css/login.css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>
<div id="wrapper">
    <!-- Login Form -->
    <div id="login">
        <h2><span class="fontawesome-lock"></span>Interner Bereich</h2>
      <form method="post" action="index.php">
        <fieldset>
           <!--
           <p><label for="email">E-mail address</label></p>
           <p><input type="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p>
           -->
            <?php
            if(isset($errorMessage)) {
                echo '<font color="red"> '.$errorMessage.' </font>';
            }
            ?>
            <p><label for="password">Passwort</label></p>
            <p><input name="password" type="password" id="password" value="Passwort" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->

            <p><input type="submit" value="Login"></p>
        </fieldset>
       </form>
    </div>
</div>
<footer id="stickyfooter">Sticky Footer</footer>

</body>
</html>