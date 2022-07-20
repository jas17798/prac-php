<?php

// Declaration of an Interface
interface parent1{            

    // Declaration of a method. Only declare the method, don't define it here. Define this method in class. 
   public function calc($a, $b);  

}

interface parent2{

  public  function sub($c, $d);

}


// Class extends the interface or multiple interfaces, by using keyword implements
class childClass implements parent1, parent2{   

    // Define interface method here. No. of properties should match the exact numbers, as declare in an interface. 
    public function calc($a, $b)
    {
        echo $a + $b;
    }

    public function sub($c, $d)
    {
        echo $c - $d;
    }
}

// creation of an object of class. Can't instantiate object of an interface. 
$test = new childClass();

// accessing the methods of interface. 
$test->calc(40, 20);
echo "<br>";
$test->sub(30, 10);



?>


<?php

    interface basic{
        public function greet();
    }


    class A implements basic{
        public function greet()
        {
            echo "<br><br>";
            echo "Hollaa<br>";
        }
    }

    class B implements basic{
        public function greet()
        {
            echo "Hellooo<br>";
        }
    }


    class C implements basic{
        public function greet()
        {
            echo "HIIIII ";
        }
    }

    $greetings = [
        new A(),
        new B(),
        new C()
    ];

    foreach($greetings as $greet)
    {
        $greet->greet();    
    }

?>