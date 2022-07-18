<?php

class base{
    public $name = "Parent Class";

    public function calc($a, $b)
    {   
        return $a * $b;
    }

}

class derived extends base{
    public $name = "Child Class";

    public function calc($a, $b)
    {   
        return $a + $b;
    }

}


$test = new base();
echo $test->name;


$test2 = new derived();
echo "<br>" .  $test2->name;
echo "<br>" . $test2->calc(5 , 10);


abstract class parentClass{
   
    public $name ;

    abstract protected function calc($a, $b);
}


class childclass extends parentClass{

    public function calc($a, $b)            
    {
        return $a + $b;
    }
}

$test3 = new childclass();

echo "<br>" .$test3->name;

echo "<br>" . $test3->calc(54, 4);

?>