<?php
trait hello{
    public function sayHello(){
        echo "Hello everyone\n";
    }

    public function sayHi(){
        echo "Hi everyone\n";
    }
}

trait bye{
    public function saybye()
    {
        echo "Bye Everyone<br>";
    }
}
class A {
    use hello, bye;

}


class B {
    use hello;
    use bye;
}

    $test = new A();
    $test2 = new B();

$test->sayHello();
$test->saybye();
$test2->sayHello();
$test2->saybye();

$test->sayHi();
?>