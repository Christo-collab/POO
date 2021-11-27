<?php

require_once 'Pompe.php';

abstract class Vehicule
{

    /**
     * @var String
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $vitesse = 0;

    /**
     * @var int
     */
    private $vitesseMax;

    /**
     * @var int
     */
    private $contenuReservoir;

    /**
     * @var int
     */
    private $contenanceReservoir;


    public function __construct(string $typeCarburant, int $contenanceReservoir, int $contenuReservoir, int $vitesseMax)
    {

        $this->setTypeCarburant($typeCarburant)->setContenanceReservoir($contenanceReservoir)->setContenuReservoir($contenuReservoir)->setVitesseMax($vitesseMax);


    }


    public function accelerer(int $acceleration)
    {

        if ($this->vitesse + $acceleration <= $this->vitesseMax):
            $this->vitesse = $this->vitesse + $acceleration;
        else:
            $this->vitesse= $this->vitesseMax;
        endif;
    }

    public function fairePlein( Pompe $pompe)
    {
        if($this->typeCarburant == $pompe->getTypeCarburant())
        {
            if($this->contenuCuve > $contenanceReservoir - $contenuReservoir){

                return 'Je fais le plein';
            }

            else{

                trigger_error('Vous n\'êtes pas à la bonne pompe') ;
            }
              
        }
    }


    /**
     * @return String
     */
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * @param String $typeCarburant
     * @return Vehicule
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
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     * @return Vehicule
     */
    public function setVitesse(int $vitesse): Vehicule
    {
        $this->vitesse = $vitesse;
        return $this;
    }

    /**
     * @return int
     */
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * @param int $vitesseMax
     * @return Vehicule
     */
    public function setVitesseMax(int $vitesseMax): Vehicule
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenuReservoir(): int
    {
        return $this->contenuReservoir;
    }

    /**
     * @param int $contenuReservoir
     * @return Vehicule
     */
    public function setContenuReservoir(int $contenuReservoir): Vehicule
    {
        $this->contenuReservoir = $contenuReservoir;
        return $this;
    }

    /**
     * @return int
     */
    public function getContenanceReservoir(): int
    {
        return $this->contenanceReservoir;
    }

    /**
     * @param int $contenanceReservoir
     * @return Vehicule
     */
    public function setContenanceReservoir(int $contenanceReservoir): Vehicule
    {
        $this->contenanceReservoir = $contenanceReservoir;
        return $this;
    }


}