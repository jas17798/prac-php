<?php

class employees{
    public $name;
    public $age;
    public $salary;


    public function __construct($n, $a, $s) 
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

}

$e1 = new employees("Ram", 25, 40000);