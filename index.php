<!--pour la recherche-->
<?php
    require('conn.php');
    $affiche = '';

if(isset($_POST['search']) && !empty($_POST['search'])){
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]#i","",$search);
    
    $sql = mysql_query("SELECT*FROM films WHERE nom LIKE '%$search%' ") or die("pas de resultats !");
    $compte = mysql_num_rows($sql);
    if($compte == 0){
        $affiche = 'pas de resultats de recherche !'; 
    }
    else{
        while($row = mysql_fetch_array($sql)){
            $nom = $row['nom'];
            $idfilm =$row['numero'];
            
            $affiche = '<div>'.$nom.'</div>';
        }
        
    }
}
?>


<!DOCTYPE html>
<html>    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" media="all" href="css/style.css">
    <link href="Vidéothéque/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript"></script>
    
  <title>Videotheque vidéooo !</title>   
</head>
<body>
    <header class="header">
        <div class="bande-bleu">
            <div class="container_recherche">
                <form class="search" action="index.php">
                    <input class="champ" type="search" required="" placeholder="Nom du film..." name="search"  method="POST" maxlength="80">
                    <input class="button_form" type="submit" value="Recherher">    
               </form>
                <?php print ("$affiche"); ?>
            </div> 
        </div>
        <div class="navigation">
                <nav class="navbar">
                    <ul class="nav"><!--
                    --><li><a href="index.php">ACCUEIL</a></li><!--
                    --><li><a href="films.php">LISTE FILMS</a></li><!--
                    --><li><a href="ajout.php">AJOUTER UN FILM</a></li>
                    </ul> 
               </nav>
            </div>  
    </header>
        <section>
            <div class="bienvenu">
                <span class="text1">Bienvenu dans</span>
                <span class="text2">la vidéothéque de Monsieur ba</span>
            </div>
            <div class="slider">
             <div class="slides">
                <div class="slide"><img src="images/freres_enemis.jpg" alt="" /></div>
                <div class="slide"><img src="images/Gemini.jpg" alt="" /></div>
                <div class="slide"><img src="images/Joker.jpg" alt="" /></div>
                <div class="slide"><img src="images/le_diner_des_cons.jpg" alt="" /></div>
                <div class="slide"><img src="images/glass.jpg" alt="" /></div> 
                <div class="slide"><img src="images/la_vie_scolaire.jpg" alt="" /></div> 
                <div class="slide"><img src="images/parasites.jpg" alt="" /></div> 
                <div class="slide"><img src="images/silence_radio.jpg" alt="" /></div> 
             </div>
            </div>
        </section>
        <article>
               <p>
                  <em>
                    Dans cette application web, vous pouvez afficher la liste des films, ajouter le film de votre choix avec des information le concernant, modifier les informations d'un film et supprimer un films qui dejas dans la liste des films.
                  </em>
            </p>
        </article>
   <footer>
           <p>Copyright Alassane - Tous droits de réservés © | Vidéooo ! 2020<br/><a href="mailto:papialou90gmail.com">Me contacter !</a>
           </p>
   </footer>
    
     <script src="js/index.js"></script>
    </body>
</html>
