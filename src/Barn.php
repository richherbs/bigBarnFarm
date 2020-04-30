<?php

namespace MyApp;

class Barn {
    private $residents = [];
    private $size;

    function __construct(int $size)
    {
        $this->size = $size;
    }

    function house (Animal $someAnimal) :bool{
        if(count($this->residents) < $this->size){
            $this->residents[$someAnimal->getName()] = $someAnimal;
            $someAnimal->goToSleep();
            return true;
        } else {
            echo "I'm sorry there's no room at the inn.";
            return false;
        }
    }

    function unHouse(Animal $someAnimal) :bool {
        if(array_key_exists($someAnimal->name, $this->residents)){
            unset($this->residents[$someAnimal->getName()]);
            $someAnimal->wakeUp();
            return true;
        } else {
            echo "That animal isn't housed here.";
            return false;
        }
    }

    /**
     * Get the value of size
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Get the value of residents
     */ 
    public function getResidents()
    {
        return $this->residents;
    }
}