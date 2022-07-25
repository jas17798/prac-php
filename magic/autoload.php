<?php

// require "auto/first.php";
// require "auto/second.php";

function __autoload($test)
{
    require "auto/" . $test . ".php";
}


$obj = new first();
$obj2 = new second();
