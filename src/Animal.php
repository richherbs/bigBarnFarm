<?php

namespace MyApp;

abstract class Animal{
    use Speak;

    protected $name;
    protected $age;
    protected $sex;
    protected $species;
    protected $voice;
    protected $asleep = false;

    function __construct(string $name,int $age,string $sex,string $species, string $voice)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->species = $species;
        $this->voice = $voice;
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

    public function goToSleep() :bool{
        if(!$this->asleep){
            $this->asleep = true;
            echo $this->voice . "snore! zzzzzz.";
            return true;
        } else {
            echo $this->voice . " I'm asleep go away.";
            return false;
        }
    }

    public function wakeUp() :bool {
        if($this->asleep){
            $this->asleep = false;
            $this->speak(' Morning!');
            return true;
        } else {
            $this->speak(" I'm not asleep!");
            return false;
        }
    }
    

    /**
     * Get the value of asleep
     */ 
    public function getAsleep()
    {
        return $this->asleep;
    }
}