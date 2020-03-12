<?php
  
require('conn.php');
extract($_POST);
$idfilm=$_POST['idmodif'];

if(isset($_POST['update_buton'])){
    $nom=$_POST['nom'];
    $nom = addslashes($nom);
    $synopsis=$_POST['synopsis'];
    $synopsis = addslashes($synopsis);
    $date=$_POST['date'];
    $image=$_POST['image'];
    $type=$_POST['type'];
    $prix=$_POST['prix'];
    
//requete update
    $modifier= "UPDATE films SET
    nom = '$nom', 
    synopsis = '$synopsis',
    annee = '$date',
    type = '$type', 
    prix = $prix
    WHERE numero = $idfilm ";
    
    //execute
    $resultat=mysqli_query($conn,$modifier);   
    //controle
    if($resultat)
    {
        $message = 'La mise a jour a bien ete effectuee !';
        header('location:films.php?sms='.$message);   
    }
    else{
        die('Erreur sql !' .$resultat.'</br>'.mysql_error());    
    }   
}
?>