<?php

class test{
    public function first()
    {
        echo "This is First Function";
        return $this;
    }

    public function second()
    {
        echo "This is Second Function";
        return $this;
    }

    public function third()
    {
        echo "This is Third Function";
        // return $this;
    }
}



$obj = new test();

$obj->first()->second()->third();