<?php 
// If there is no constant defined named __CONFIG__ , do not load this file
    if(!defined('__CONFIG__')){
        exit('You do not have a config file');
    }

    // Connect to the DB
    require_once "classes/DB.php";
?>
