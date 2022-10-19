<?php
include "database.php";
include "person.php";
// telecharger l'image;
  function afficherImage(){
      $chemain="telecharger/";
      $concatenation=$chemain.basename($_FILES["fileToUpload"]["name"]);
      if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $concatenation)){
        return $concatenation;
      } else {
        echo "Possible file upload attack!\n";
        return null;
    }
  }
// verification des champs;
  if (isset($_POST["submit"])) {
    if (empty(trim($_POST["nom"]))or empty(trim($_POST["prenom"]))or empty(trim($_POST["age"]))) {
      echo "Veuillez remplir tous les champs";
    }else{
      $nom=htmlspecialchars($_POST["nom"]);
      $prenom=htmlspecialchars($_POST["prenom"]);
      $age=htmlspecialchars($_POST["age"]);
      $img=afficherImage();
    }
    // affichage de l'objet;
     $persone = new Personne ();
     $persone->getInfo(); 


    if($pdo!=null){

      // inserer les infos depuis le formulaire vers la base de données;

      $query="INSERT INTO users (nom,prenom,age,photo) VALUES(:nom,:prenom,:age,:photo);";
        $params=[
            'nom'=>$nom,
            'prenom'=>$prenom,
            'age'=>$age,
            'photo'=>$img,
        ];
        $statement=$pdo ->prepare($query);
        $statement -> execute($params);
        echo "user ajouté avec succé";
  }

}


// pour afficher la base de donne sur le navigateur sous forme d'un tableau;    

/*    $selectQuery = "select * from users";
  $stmnt=$pdo-> prepare($selectQuery);
  $stmnt ->execute();
  $data=$stmnt ->fetch(PDO::FETCH_ASSOC);
  print_r($data); */
  
  