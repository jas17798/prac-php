<?php

class calc{
    public $a, $b, $c;

    public function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

class person{
    public $name = "No Name"; 
    public $age = 0;
    public function __construct( $n  = "No Name", $age = 0)
    {
        $this->name = $n;
        $this->age = $age;
    }


    public function show()
    {
        echo "<br>Your name is " . $this->name;
        echo "<br>Age is = " . $this->age;
    }
}

$ca = new calc();

$ca->a = 20;
$ca->b = 10;


$cb = new calc();

$cb->a = 50;
$cb->b = 30;


echo   "Sum of a and b is = " . $ca->sum();
echo   "<br>Sum of a and b is = " . $cb->sum();
echo   "<br>Sub of a and b is = " . $cb->sub();

echo   "<br>Sub of a and b is = " . $ca->sub();


$p1 = new person();
$p2 = new person("Ram ", 30);
$p3 = new person("Salman", 40);



$p1->show();
$p2->show();
$p3->show();


?>



