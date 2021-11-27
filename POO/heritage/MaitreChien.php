<?php

require_once 'Chien.php';

class MaitreChien 
{


    /**
     * @var Chien
     */
    private $chien;

    public function __construct($chien)
    {
        $this->setChien($chien);
    }

    /**
     * Get the value of chien
     *
     * @return  Chien
     */ 
    public function getChien()
    {
        return $this->chien;
    }

    /**
     * Set the value of chien
     *
     * @param  Chien  $chien
     *
     * @return  self
     */ 
    public function setChien(Chien $chien)
    {
        $this->chien = $chien;

        return $this;
    }
}
