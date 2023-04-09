<?php
    //autoload funkció
    function autoLoad($class)
    {
        if(file_exists('Classes/' . $class . '.php')){
            require_once('Classes/' . $class . '.php');
        }
        else if(file_exists('Controllers/' . $class . '.php')){
            require_once('Controllers/' . $class . '.php');
        }
        else if(file_exists('Models/' . $class . '.php')){
            require_once('Models/' . $class . '.php');
        }
    }
    //autoload meghívás
    spl_autoload_register('autoLoad'); 

    //Keret modulok
    require_once("Public/header.php");
    require_once("routes.php");

    //Alapéertelmezett index oldal  betöltés
    if($_GET['url'] == "index.php"){
        Index::CreateView("index");
    }
    
?>
