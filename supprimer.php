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
        echo " <div class='alert alert-sucess'><h1>Requete validee !</h1><p>la mise a jour a bien ete effectuee !</p>";
        header('location:films.php');
        
    }
    else{
        echo 'Erreur la supression a échouée';
        
    }
    
        
?>