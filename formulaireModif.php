 <?php
       require('conn.php');
       $idfilm=$_GET['id'];
       $sql = " SELECT * from films WHERE numero=$idfilm ";
       $resultat = mysqli_query($conn,$sql); 
    
       $modif = mysqli_fetch_assoc($resultat)
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
                    --><li><a href="films.php">FILMS</a></li><!--
                    --><li><a href="ajout.php">AJOUTER</a></li>
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
            <label>Nom du film : </label>
            <input type="text" name="nom" value="<?php  echo $modif['nom'] ?>"/><br> 
            <label>Synopsis du film</label>
            <textarea rows="8" cols="45" name="synopsis" value="<?php echo $modif ['synopsis'] ?>">
            </textarea><br>
            <label>Date : </label>
            <input type="date" name="date" value="<?php echo $modif ['date'] ?>"><br>
            <label>Type du film : </label>
            <select name="type" value="<?php echo $modif ['type'] ?>">
                <option  selected="selected"></option>
                <option >fiction</option>
                <option >action</option>
                <option >drame</option>
                <option >comedie</option>
           </select><br>
            <label>Image du film : </label>
            <input type="image" name="image" value="<?php echo $modif ['image'] ?>">
            <br>
            <label>Prix du film : </label>
            <input type="text" name="prix" value="<?php echo $modif ['prix'] ?>"> FCFA<br>
               <label for="submit"></label>
            <input class="button_form" type="submit" name="update_buton" value="MODFIER">
        </fieldset>
    </form>
   <footer>
           <p>Copyright Alassane - Tous droits de réservés © | Vidéooo ! 2020<br/><a href="mailto:papialou90gmail.com">Me contacter !</a>
           </p>
   </footer>
    
     <script src="js/index.js"></script>
    </body>
</html>
