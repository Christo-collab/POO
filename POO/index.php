<?php

class Utilisateur {

    /**
     * commentaire de documentation (avec slash double étoile et entrée)
     * *
     * ici $nom est un attribut de la classe Utilisateur (ou 'propriété')
     * 
     * @var string 
     * 
     * 
     */
    public $nom="Guillet";


    /**
     *  @var string
     */
    public $prenom ="Christophe";

    /**
     *  @var int
     */
    private $age = 41;

    /**
     * Ici on parle de méthode de la classe Utilisateur (= fonction interne à la classe)
     */
    public function infos(){
        
        // ici,$this fait référence à l'objet courant qui appelle la méthode
        return $this->prenom.','.$this->nom.','.$this->age.'ans';
    }

}

//echo $prenom; error : indefined cariable $prenom
// $prenom n'existe qu'au sein de la classe Utilisateur

//On instancie un nouvel objet de la classe Utilisateur avec sa propre existence indépendante d'un autre objet
$moi=new Utilisateur();
var_dump($moi);

echo '<br>'.$moi->prenom . '<br>';

$toi=new Utilisateur();

// Ici on réaffecte une nouvelle valeur à la propriété $prenom de l'objet $toi
$toi->prenom='Julien';

echo $moi->prenom.'<br>';
echo $toi->prenom.'<br>';

// Fatal error, on ne peut pas accéder diredctement à une prorpiété privée d'un objet
// echo $moi->age;

//Ici on appelle sur notre objet $moi la méthode infos() de la classe Utilisateur
echo $moi->infos().'<br>';
echo $toi->infos().'<br>';














