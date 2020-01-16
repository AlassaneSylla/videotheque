<?php
  
require('conn.php');

//
if(isset($_POST['update_buton'])){
    $nom=$_POST['nom'];
    $synopsis=$_POST['synopsis'];
    $date=$_POST['date'];
    $image=$_POST['image'];;
    $type=$_POST['type'];
    $prix=$_POST['prix'];
    
//requete update
    $modifier= " UPDATE films SET
    nom=".$_POST['nom'].",
    synopsis=".$_POST['synopsis'].",
    date=".$_POST['date'].",
    image=".$_POST['image'].",
    type=".$_POST['type'].",
    prix=".$_POST['prix'].",
    WHERE numero=".$_GET['id']." ";
    
    //execute
    $resultat=mysqli_query($conn,$modifier);
    
    //controle
    if($resultat){
        die('Erreur sql !' .$resultat.'</br>'.mysql_error());
    }
    else{
        echo " <div class='alert alert-sucess'><h1>Requete validee !</h1><p>la mise a jour a bien ete effectuee !</p>";
        header('location:films.php');
    }
    
}

?>