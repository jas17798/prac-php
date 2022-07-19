<?php
    abstract class person{
        abstract public function greet();
    }


    class german extends person {

        public function greet(){
            echo "Hallo!";
        }
    }

    class english extends person {

        public function greet(){
            echo "Hello!";
        }
    }

    class french extends person {

        public function greet(){
            echo "Bonjour!";
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
        new french()
    ];

    

    greeting($people);

  

?>