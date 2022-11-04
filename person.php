<?php
class Personne{
    public string $nom;
    public string $prenom;
    public int $age;
    public string $img;
    function __construct($nom,$prenom,$age,$img){
      $this->nom=$nom;
      $this->prenom=$prenom;
      $this->age=$age;
      $this->img=$img;
    }
   function getInfo()
    {
        echo "Nom :$this->nom " . "<br>" . "Prénom:$this->prenom" . "<br>" . "Age:$this->age" . "<br>" . "Image:<img src='" . $this->img . "'/>";
    }
 }