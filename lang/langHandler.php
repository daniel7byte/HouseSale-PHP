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
    if(is_file(include("lang/es.php"))) {
        include("lang/es.php");
    } else {
        include("../lang/es.php");
    }
    break;
default:
    if(is_file(include("lang/en.php"))) {
        include("lang/en.php");
    } else {
        include("../lang/en.php");
    }
}

?>