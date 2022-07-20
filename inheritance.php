<?php

class employees{
    public $name;
    public $age;
    public $salary;


    public function __construct($n, $a, $s) 
    {
        echo "<br>Employee constructor<br>";
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function profile()
    {
        echo "<br>Employee Record <br>";
        echo "<br>Employee Name = " . $this->name;
        echo "<br>Employee Age = " . $this->age;
        echo "<br>Employee Salary = " . $this->salary;
     
    }

}

class manager extends employees{
    public $travelling = 1000;
    public $phone = 300;
    public $totalSalary;

    public function profile()
    {
        $this->totalSalary = $this->travelling + $this->phone + $this->salary;
        echo "<br>Employee Record <br>";
        echo "<br>Employee Name = " . $this->name;
        echo "<br>Employee Age = " . $this->age;
        echo "<br>Employee Salary = " . $this->totalSalary;
     
    }
}


// $e1 = new employees("Ram", 25, 40000);

$m1 = new manager("Shubha", 45, 48000);
$m1->profile();

$e1 = new employees("Ram", 27, 48000);
$e1->profile();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP | Inheritance</title>
</head>
<body>
    
</body>
</html>