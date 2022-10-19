<?php
class Personne{
    public $nom;
    public $prenom;
    public $age;
    public $img;
    function __construct(){
      $this->nom=$_POST["nom"];
      $this->prenom=$_POST["prenom"];
      $this->age=$_POST["age"];
      $this->img=($_FILES["fileToUpload"]["name"]);
    }
   
   public function getInfo(){
    echo "<h2> nom: ". $this->nom. " Prénom: ".$this->prenom. "</h2> <strong> Age: ".$this->age, "</strong>  <br> <img src='".$this->img."' />";
   }
 }