<?php
    
    $client_lang = $_POST["lang"];
    session_start();
    if(isset($client_lang) AND !empty($client_lang)) {
        $_SESSION["lang"] = $client_lang;
    } else {
        $_SESSION["lang"] = "en";
    }

?>