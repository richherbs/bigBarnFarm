<?php

abstract class Animal {
    private $name;
    private $age;
    private $sex;
    private $species;

    function __construct($name, $age, $sex, $species)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->species = $species;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Get the value of species
     */ 
    public function getSpecies()
    {
        return $this->species;
    }

    public abstract function goToSleep();
    
}