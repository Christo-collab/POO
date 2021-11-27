<?php

require_once 'Chien.php';

class Maitre 
{

    /**
     * @var Animal
     */
    private $animal;
    

    /**
     * Get the value of animal
     *
     * @return  Animal
     */ 
    public function getAnimal() : Animal
    {
        return $this->animal;
    }

    /**
     * Set the value of animal
     *
     * @param  Animal  $animal
     *
     * @return  self
     */ 
    public function setAnimal(Animal $animal) : Maitre 
    {
        $this->animal = $animal;

        return $this;
    }

    public function donnerSucre()
    {
      if($this->animal instanceof Chien){

        return $this->animal->mangerSucre();
    }
        else{

            return 'ton animal ne mange pas de sucre';
        }
    


    }
}
