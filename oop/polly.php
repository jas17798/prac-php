<?php
    abstract class person{
        abstract public function greet();
    }


    class german extends person {

        public function greet(){
            echo "Hallo! <br>";
        }
    }

    class english extends person {

        public function greet(){
            echo "Hello! <br>";
        }
    }

    class french extends person {

        public function greet(){
            echo "Bonjour! <br>";
        }
    }

    class american extends person {

        public function greet(){
            echo "HIIIIII <br>";
        }
    }


    function greeting($people)
    {
        foreach($people as $person){
            $person->greet();
           
        }
    }

    $people = [
        new german(),
        new english(),
        new french(),
        new american()
    ];

    

    greeting($people);

  

?>