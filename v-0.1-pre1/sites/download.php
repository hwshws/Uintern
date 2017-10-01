<?php
session_start();
function download($filename){
    $file = "../files/".$filename;
    $size       = filesize($file);
    header ( 'Content-Description: File Transfer' );
    header("Content-Type: application/force-download");
    header ( 'Content-Type: application/octet-stream' );
    header ( 'Content-Disposition: attachment; filename=' . basename ( $file ) );
    header ( 'Expires: 0' );
    header ( 'Cache-Control: must-revalidate' );
    header ( 'Pragma: public' );
    header ( 'Content-Length: ' . filesize ( $file ) );
    ob_clean();
    flush();
    readfile ( $file );
    exit();
}

function student(){
    if ($_SESSION['type'] != "student") header("Location: ../index.php");
    if(isset($_GET['download'])) {
        $download = $_GET['download'];
        $type = $_SESSION['type'];
        switch ($_GET['download']) {
            case "Vertretungsplan.docx";
                download($download);
                break;
            case "deka.pdf";
                download($download);
                break;
            case "klassen.pdf";
                download($download);
                break;
            case "Schmiede.doc";
                download($download);
                break;
            case "Lebenslauf.doc";
                download($download);
                break;
            case "Projekte.zip";
                download($download);
                break;
            case "../index.php";
                download($download);
                break;
            case "download.php";
                download($download);
                break;
            default:
                header("Location: ../index.php");
                break;
        }
    }
}

function teacher(){
    if ($_SESSION['type'] != "teacher") header("Location: ../index.php");
    if(isset($_GET['download'])) {
        $download = $_GET['download'];
        $type = $_SESSION['type'];
        switch ($_GET['download']) {
            case "Vertretungsplan.docx";
                download($download);
                break;
            case "deka.pdf";
                download($download);
                break;
            case "klassen.pdf";
                download($download);
                break;
            case "Schmiede.doc";
                download($download);
                break;
            case "Lebenslauf.doc";
                download($download);
                break;
            case "Projekte.zip";
                download($download);
                break;
            default:
                header("Location: ../index.php");
                break;
        }
    }
}