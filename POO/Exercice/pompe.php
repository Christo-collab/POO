<?php


class Pompe
{
    
    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $contenuCuve;

    public function __construct(string $typeCarburant, int $contenuCuve)
    {

        $this->setTypeCarburant($typeCarburant)->setContenuCuve($contenuCuve);

    }

    /**
     * Get the value of typeCarburant
     *
     * @return  string
     */ 
    public function getTypeCarburant()
    {
        return $this->typeCarburant;
    }

    /**
     * Set the value of typeCarburant
     *
     * @param  string  $typeCarburant
     *
     * @return  self
     */ 
    public function setTypeCarburant(string $typeCarburant): Vehicule
    {
        if ($typeCarburant == 'SP95' || $typeCarburant == 'SP98'):
            $this->typeCarburant = $typeCarburant;
            return $this;
        else:
            trigger_error('Les carburants acceptés sont SP95 ou SP98', E_USER_WARNING);
        endif;
    }

    /**
     * Get the value of contenuCuve
     *
     * @return  int
     */ 
    public function getContenuCuve()
    {
        return $this->contenuCuve;
    }

    /**
     * Set the value of contenuCuve
     *
     * @param  int  $contenuCuve
     *
     * @return  self
     */ 
    public function setContenuCuve(int $contenuCuve)
    {
        $this->contenuCuve = $contenuCuve;

        return $this;
    }
}
