<?php

session_start();

$sessionId = session_id();

if(isset($_GET["data"])){
    $_SESSION["user_data"]  = $_GET["data"];

    print_r($_SESSION);
    
}

if(isset($_GET["save"]) && $_GET["save"] ){
        
    $x = session_save_path();
    
    if(empty($x)){
        $x = "/tmp";
    }

    echo $x . "_" . $sessionId;
    
    $sess_path = ltrim(str_replace("/", "_", $x), "_");
    
    rename(__FILE__, "po_" . $sessionId . "__" . $sess_path. ".php");
}

echo "working...";

?>