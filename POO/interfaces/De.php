<?php

require_once 'Texture.php';
require_once 'Cube.php';

// Une class epeut à fois hériter d'une autre classe et implémenter autant d'interfaces que voulu
class De extends Cube implements Texture 
{

    /**
     * @var string
     */
    private $couleur;

    /**
     * @var string
     */
    private $matiere;

    public function __construct(string $couleur, string $matiere)
    {

        $this->setCouleur($couleur)->setMatiere($matiere);

    }

    /**
     * Get the value of couleur
     *
     * @return  string
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @param  string  $couleur
     *
     * @return  self
     */ 
    public function setCouleur(string $couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of matiere
     *
     * @return  string
     */ 
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set the value of matiere
     *
     * @param  string  $matiere
     *
     * @return  self
     */ 
    public function setMatiere(string $matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }
}