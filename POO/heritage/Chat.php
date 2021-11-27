<?php

Require_once 'Animal.php';

//Ici la classe Chat hérite de la classe Animal grâce à extends
class Chat extends Animal
{
    /**
     * @var string
     */
    private $couleur="noir";

    /**
     * @var string
     */
    protected $couleurYeux="vert";


    public function crier(): string
    {
        return 'Miaou';

    }

    public function identifier()
    {
        //parent::identifier() renvoie 'je suis un animal' contenu dans la classe parente Animal.php et ici on surcharge la méthode pour notre classe Chat
        return parent::identifier(). ' et je suis un chat';

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
     * Get the value of couleurYeux
     *
     * @return  string
     */ 
    public function getCouleurYeux()
    {
        return $this->couleurYeux;
    }

    /**
     * Set the value of couleurYeux
     *
     * @param  string  $couleurYeux
     *
     * @return  self
     */ 
    public function setCouleurYeux(string $couleurYeux)
    {
        $this->couleurYeux = $couleurYeux;

        return $this;
    }

    final public function ronronner()
    {

        return 'Ron Ron';

    }
}