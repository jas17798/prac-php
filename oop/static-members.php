<?php

// Static Members usage. Doesn't need to instantiate the variable of the class. use :: to access properties and methods.
 
class base{
    // public $name = "Yahoo BaBA";
    public static $name = "Yahoo BaBA";
    protected static $age = 30;
    // public function show()
    public static function show()
    {
        // echo $this->name;
        echo "<br>" . self::$name; // use static variable in same class. 
    }

    public function getAge()
    {
        echo self::$age;
        echo static::$age;
    }
    // public function __construct($n)
    // {
    //     self::$name = $n;
    //     self::show();
    // }
}

class derived extends base{
    protected static $age = 50;
    public static function show()
    {
        echo "<br>" . parent::$name; // use static variable in derived class. 
    }
}

// $test = new base("Wow");

// $test->show();

// echo base::$name;
// base::show();

$test2 = new derived();
$test2->show();

$test2->getAge();
?>

