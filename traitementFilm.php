<?php
    //securiser formulaire
    $nom = "";
    $synopsis = "";
    $date = "";
    $image = "";
    $type = "";
    $prix = "";
    function securisation($donnees){
        $donnees = trim($donnees);
        $donnees = strip_tags($donnees);
        $donnees = stripcslashes($donnees);
        return $donnees;
    }
              
    //upload images
    require('conn.php');
    if(isset($_POST['bouton'])){
        //$target_path = "images/";
        //$target_path = $target_path.basename($_FILES['image'] ['name']);
        extract($_POST);
        $target_path = "images/";
        $target_path = $target_path.basename($_FILES['uploadedfile'] ['name']);
        
        if(move_uploaded_file($_FILES['uploadedfile'] ['tmp_name'], $target_path)){
            $sql = "INSERT INTO `films` (`image`) VALUES ('$target_path')";
            if($conn->query($sql) == TRUE){
               // echo "<br><br>";
            }
            else{
                echo " Error ".$sql.$conn -> error;
            }      
    }
    } 

    //extraire donnees securisees
    extract($_POST);
    $nom= securisation($_POST['nomFilm']);
    $nom = addslashes($nom);
    $synopsis= securisation($_POST['synopsis']);
    $synopsis = addslashes($synopsis);
    $date= securisation($_POST['date']);
    $image= $target_path ;
    $type= $_POST['type'];
    $prix= securisation($_POST['prix']);
     
    //inserer donnees
    $sql = "INSERT INTO films (nom, synopsis, annee, image, type, prix) VALUES ('$nom', '$synopsis', '$date',  '$image', '$type', '$prix')";
    $resultat = mysqli_query($conn,$sql);
    if($resultat){
        $message = 'Insertion reussie';
        header('location:films.php?sms='.$message);
    }
    else{
        echo 'Linsertion a echoué';
    }

?> 