<?php

class Personne
{

    // Dans un fichier de classe, toute propriété déclarée privée va nécessiter la création de Getters et de Setters afin de pouvoir obtenir ou modifier ou affecter la valeur de cette propriété.
    // On appelle ce principe le principe d'encapsulation
    // Ainsi, si on souhaite obtenir la valeur d'une propriété de l'objet, on passera par :
    // $objet->getPropriete()
    //Et si l'on souhaite affecter ou modifier la valeur de notre propriété, on va passer par le setter : $objet->setPropriete(valeurDeLaPropriete).

    //Ainsi, par ce principe d'encapsulation, on peut conditionner l'accès à nos propriétés et par conséquent sécurisé

    /**
     *  @var string | null
     */
    private $nom;
    

    /**
     * @var string | null
     */
    private $prenom;


    

    /**
     * Get | null
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * 
     * Ici, nous sommes sur le setter de $nom qui nous permet d'affecter, de modifier, la valeur de la propriété
     * 
     * Set | null
     *
     * @param  string  $nom  | null
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {

        $this->nom = $nom;

        return $this;
    }

    /**
     * Get | null
     *
     * @return  string
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set | null
     *
     * @param  string  $prenom  | null
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        if(strlen($prenom) < 2)
        {

        trigger_error('Vous avez vraiment un tout petit prénom' , E_USER_WARNING) ;
        }

        else
        {

            $this->prenom = $prenom;

            return $this;
       
        }
        

    }

}