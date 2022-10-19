<?php
$username="root";
$password="";
$host="localhost";
$db="form";
$pdo= new PDO ("mysql:host=$host;dbname=$db",$username,$password);

/* if($pdo!=null){
    $nom="IBN ABBAD";
    $prenom="sara";
    $age=26;
  $query="INSERT INTO users (nom,prenom,age) VALUES(:nom,:prenom,:age);";
    $params=[
        'nom'=>$nom,
        'prenom'=>$prenom,
        'age'=>$age,
    ];
    $statement=$pdo ->prepare($query);
    $statement -> execute($params);
    echo "user ajouté avec succé";
} */