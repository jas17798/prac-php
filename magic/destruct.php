<?php

class abc{
    public function __construct()
    {
        echo "This is construtor<br>";
    }

    public function hello()
    {
        echo "This is a Hello function.<br>";
    }

    public function __destruct()
    {
        echo "This is a destructor<br>";
    }
}

$obj = new abc();

$obj->hello();