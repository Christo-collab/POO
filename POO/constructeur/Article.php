<?php

class Article
{

    /**
     * @var string
     */
    private $titre;


    /**
     * @var string | null
     */
    private $contenu;

    
    /**
     * @var DateTime | null
     */
    private $datePublication;



    // Cette fonction magique de PHP est automatiquement appelée à l'instanciation d'un nouvel objet
    public function __construct(string $titre, ?string $contenu=null)
    {

        $this->setTitre($titre)
            ->setContenu($contenu)
            //Les attributs de type object auxquels on souhaite attribuer une valeur par défaut doivent iimpérativement être setter dans le constructeur
            ->setDatePublication(new DateTime());
    }





    /**
     * Get the value of titre
     *
     * @return  string
     */ 
    public function getTitre() : string 
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param  string  $titre
     *
     * @return  self
     */ 
    public function setTitre(string $titre) : Article 
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get | null
     *
     * @return  string
     */ 
    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    /**
     * Set | null
     *
     * @param  string  $contenu  | null
     *
     * @return  self
     */ 
    public function setContenu(?string $contenu) : Article 
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get | null
     *
     * @return  DateTime
     */ 
    public function getDatePublication() : dateTime 
    {
        return $this->datePublication;
    }

    /**
     * Set | null
     *
     * @param  DateTime  $datePublication  | null
     *
     * @return  self
     */ 
    public function setDatePublication(DateTime $datePublication)
    {
        $this->datePublication = $datePublication;

        return $this;
    }
}