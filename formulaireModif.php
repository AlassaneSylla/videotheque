 <?php
       require('conn.php');
       $idfilm=$_GET['id'];
       $sql = " SELECT * from films WHERE numero=$idfilm ";
       $resultat = mysqli_query($conn,$sql); 
       $modif = mysqli_fetch_assoc($resultat);
    ?>

<!DOCTYPE html>
<html>    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width"> 
        <link rel="stylesheet" href="css/style.css"> 
        <title>Formulaire Modification</title>   
</head>
<body>
    <header class="header">
        <div class="bande-bleu">
            <div class="container_recherche">
            </div>
        </div>
        <div class="navigation">
                <nav class="navbar">
                    <ul class="nav"><!--
                    --><li><a href="index.php">ACCUEIL</a></li><!--
                    --><li><a href="films.php">LISTE DES FILMS</a></li><!--
                    --><li><a href="ajout.php">AJOUTER FILM</a></li>
                    </ul> 
               </nav>
        </div>  
    </header>
        <section>
            <div class="bienvenu">
                <span class="text1">Vous etes entrain</span>
                <span class="text2">de modifier le fiml</span>
            </div>
        </section>
     <form class="formulaireAjout" method="post" action="modifier.php">
        <fieldset>
            <legend>MODIFIER FILM</legend>
            <label>Nom : </label>
            <input type="text" name="nom" value="<?php  echo $modif['nom'] ?>"/><br> 
            <label>SYNOPSIS</label>
            <input type="text" name="synopsis" value="<?php echo $modif['synopsis'] ?>">
            <input type="hidden" name="idmodif" value="<?php echo $_GET['id']?>"><br><!--pour recuperer le id--> 
            <label>DATE : </label>
            <input type="date" name="date" value="<?php echo $modif['date'] ?>"><br>
            <label>TYPE : </label>
            <select name="type">
                <option selected="selected"></option>
                <option>fiction</option>
                <option>action</option>
                <option>drame</option>
                <option>comedie</option>
           </select><br>
            <label>IMAGE : </label>
            <input type="file" name="image">
            <br>
            <label>PRIX : </label>
            <input type="text" name="prix" value="<?php echo $modif['prix'] ?>"> FCFA<br>
               <label for="submit"></label>
            <input class="button_form" type="submit" name="update_buton" value="MODFIER">
        </fieldset>
    </form>
   <footer>
           <p>Copyright Alassane Sylla - Tous droits de réservés © | Vidéooo ! 2020<br/><a href="mailto:papialou90gmail.com">Me contacter !</a>
           </p>
   </footer>
    </body>
</html>
