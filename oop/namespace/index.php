<?php

require 'product.php';
require 'second.php';

function wow()
{
    echo   "Wow from Index php file<br><br>";
}

use second\test\v2\command as prod;

$obj = new pro\product();
// $obj1 = new prod\product();
$obj1 = new prod\product();

prod\product::showmsg();

wow();

pro\wow();

?>