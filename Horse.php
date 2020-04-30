<?php
require_once 'Animal.php';

class Horse extends Animal {
    public function goToSleep()
    {
        echo "Neigh snore! zzzzzzz.";
    }
}