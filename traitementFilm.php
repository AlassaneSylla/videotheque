<?php
    require('conn.php');//recuperer le fichier
    extract($_POST);
    $nom=$_POST['nomFilm'];
    $nom = addslashes($nom);
    $synopsis=$_POST['synopsis'];
    $synopsis = addslashes($synopsis);
    $datem=$_POST['date'];
    $image=$_POST['image'];
    $type=$_POST['type'];
    $prix=$_POST['prix'];

    //upload image
   /* if (isset($_POST['bouton'])){
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $file_tem_loc = $_FILES['image']['tem_name'];
        $file_store = "images/".$file_name;
    
        move_uploaded_file($file_tem_loc, $file_store);
    }*/
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