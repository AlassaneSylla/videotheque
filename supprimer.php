<?php
    //recuperer le fichier avec son id
    require('conn.php');
    extract($_POST);
    $idfilm=$_GET['id'];
    
    //inserer
    $sql = "DELETE FROM films WHERE numero=$idfilm";

    $resultat = mysqli_query($conn,$sql);
    
    //verification
    if ($resultat){
        $message = 'La suppression a reussi !';
        header('location:films.php?sms='.$message);    
    }
    else{
        echo 'Erreur la supression a échouée';
    }      
?>