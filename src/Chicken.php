<?php
namespace MyApp;

class Chicken extends Animal implements flight {


    function __construct($name, $age, $sex, $species = 'chicken', $voice='BockBock!'){
        parent::__construct($name, $age, $sex, $species, $voice);
    }

    function fly()
    {
        echo $this->voice . " I'm flying!";
    }
}