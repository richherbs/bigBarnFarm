<?php
require_once 'Animal.php';
require_once 'Flight.php';

class Chicken extends Animal implements flight {
    function sleep(){
        echo "BockBock snore! zzzzzz.";
    }

    function fly()
    {
        echo "BockBock! I'm flying.";
    }
}