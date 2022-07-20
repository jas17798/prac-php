<?php

trait hello{
    // public function sayHello()
    private function sayHello()
    {
        echo "Hello from Hello Trait<br>";
    }
}

// trait hi{
//     public function sayHello()
//     {
//         echo "Hello from Hi Trait<br>";
//     }
// }


class A{
    // use hello, hi{
    //     hello::sayHello insteadOf hi;
    //     hi::sayHello as newHello;
    // }
    // public function sayHello()
    // {
    //     echo "Hello Everyone from Base Class";
    // }

    use hello{
        hello::sayHello as public newHello;
    }
}

// class B extends A{
//     use hello;
//     public function sayHello()
//     {
//         echo "Hello Everyone from Base Class";
//     }
// }

$test = new A();
// $test->sayHello();  
$test->newHello(); 