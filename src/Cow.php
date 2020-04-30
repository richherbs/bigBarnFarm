<?php
namespace MyApp;

require_once 'Animal.php';

class Cow extends Animal{

    function __construct($name, $age, $sex, $species = 'cow', $voice='Moo!'){
        parent::__construct($name, $age, $sex, $species, $voice);
    }
}