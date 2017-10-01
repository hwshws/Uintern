<?php
session_start();
include ("config.php");

$token = "";

if (isset($_GET['token'])) $token = $_GET['token'];
if (isset($_POST['token'])) $token = $_POST['token'];

if ($token == $API_Token){
    if (isset($_FILES['file_contents'])){
        $uploaddir = 'files/';
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
    }

    if (isset($_GET)){
        switch ($_GET) {
            case "download";
                if (file_exists("../files/" . $_GET['download'])) {
                    include("sites/download.php");
                    download($_GET['download']);
                    break;
                }else {
                    echo "File doesn't exist!";
                    break;
                }
        }
    }
} else echo "Wrong Token!";