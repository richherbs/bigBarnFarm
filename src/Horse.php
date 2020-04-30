<?php
namespace MyApp;

class Horse extends Animal {

    function __construct($name, $age, $sex, $species = 'horse', $voice = 'Neigh!'){
        parent::__construct($name, $age, $sex, $species, $voice);
    }
}