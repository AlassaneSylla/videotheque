<!DOCTYPE html>
<html>    
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript"></script>
  <title>Liste des films</title>   
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
                    --><li><a href="films.php">LISTE FILMS</a></li><!--
                    --><li><a href="ajout.php">AJOUTER FILM</a></li>
                    </ul> 
               </nav>
            </div>  
    </header>
        <section>
            <div class="bienvenu">
                <span class="text1">Vous avez</span>
                <span class="text2">la liste des films</span>
            </div>
        </section>
    <?php
       require('conn.php');
       $sql = 'select * from films';
       $resultat = mysqli_query($conn,$sql);   
    ?>
    <table>
        <tr>
            <th>NOM FILM</th>
            <th>SYNOPSIS</th>
            <th>ANNEE</th>
            <th>IMAGE</th>
            <th>TYPE</th>
            <th>PRIX EN FCFA</th>
            <th>ACTION</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($resultat)){?>   
            <tr>
                <td><?php  echo $row['nom'] ?></td>
                <td><?php  echo $row['synopsis'] ?></td>
                <td><?php  echo $row['annee'] ?></td>
                <td>
                    <img src="'.$_GET[<?php  echo $row['image'] ?>].'.jpg"/>
                </td>
                <td><?php  echo $row['type'] ?></td>
                <td><?php  echo $row['prix'] ?></td>
                <td>
                    <button class="button_edit"><a href="formulaireModif.php?id=<?php echo $row['numero']?>">Modifier</a></button>
                    
                    <button class="button_delete"><a href="supprimer.php?id=<?php echo $row['numero']?>">Supprimer</a></button>
                </td>
            </tr>
            <?php } 
        ?>
        
    </table>
   <footer>
           <p>Copyright Alassane - Tous droits de réservés © | Vidéooo ! 2020<br/><a href="mailto:papialou90gmail.com">Me contacter !</a>
           </p>
   </footer>
    </body>
</html>
