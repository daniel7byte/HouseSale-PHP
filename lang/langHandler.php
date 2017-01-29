<?php
error_reporting(0);
session_start();
if($_SESSION) {
    if(isset($_SESSION["lang"]) AND $_SESSION["lang"] != "") {
        $lang = $_SESSION["lang"];
    } else {
        $lang = "en";
    }
} else {
    $lang = "en";
}

switch($lang) {
case "es":
    include("lang/es.php");
    break;
default:
    include("lang/en.php");
}

?>