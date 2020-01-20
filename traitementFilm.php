<?php
    require('conn.php');//recuperer le fichier
    extract($_POST);
    $nom=$_POST['nomFilm'];
    $synopsis=$_POST['synopsis'];
    $datem=$_POST['date'];
    $image=$_POST['image'];
    $type=$_POST['type'];
    $prix=$_POST['prix'];
    
    //inserer
    $sql = "INSERT INTO films (nom, synopsis, annee, image, type, prix) VALUES ('$nom', '$synopsis', '$date',  '$image','$type', '$prix')";

    $resultat = mysqli_query($conn,$sql);

    if ($resultat){
        $message = 'Insertion reussie';
        header('location:films.php?sms='.$message);
    }
    else{
        echo 'Linsertion a echouee';
    }

?>
