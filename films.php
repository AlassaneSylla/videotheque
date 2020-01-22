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
                <form class="search" action=""  method="post">
                    <input class="champ" type="search" required="" placeholder="Nom du film..." name="search"  method="POST" maxlength="80">
                    <input class="button_form" type="submit" name="button_search" value="Recherher">    
               </form>
                <?php //print ("$affiche"); ?>
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
            <div class="bienvenu" id="bienvenu">
                <span class="text1">Vous avez</span>
                <span class="text2">la liste des films</span>
            </div>
        </section>
    <?php
       require('conn.php');
       $affiche='';//var contenant ce film n'existe pas
       if(isset($_POST['button_search']) && !empty($_POST['search'])){//si appui buttn et button non vide
           
        $search = $_POST['search'];
        $search = preg_replace("#[^0-9a-z]#i","",$search);//tous chiffres et lettres

        $sql = "SELECT * FROM films WHERE nom LIKE '%$search%' ";
        $resultat = mysqli_query($conn,$sql);
        $ligne= mysqli_num_rows($resultat);//
        if($ligne<1)//si requete =0
        {
            $affiche = "Ce film n'existe pas.";
        }   
        }
        else//sinon la liste vient
        {
            $sql = 'select * from films';
            $resultat = mysqli_query($conn,$sql);   
        }  
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
            echo $affiche;
            while($row = mysqli_fetch_assoc($resultat)){?>   
            <tr>
                
                <td><?php  echo $row['nom'] ?></td>
                <td><p class="paragraphe_synopsis"><?php  echo $row['synopsis'] ?></p></td>
                <td><?php  echo $row['annee'] ?></td>
                <td>
                   <p><img src="images/<?php  echo $row['image'] ?>" width="70" height="90"/></p>
                </td>
                <td><?php  echo $row['type'] ?></td>
                <td><?php  echo $row['prix'] ?></td>
                <td>
                    <button class="button_edit"><a href="formulaireModif.php?id=<?php echo $row['numero']?>">Modifier</a></button>
                    <button class="button_delete"><a href="supprimer.php?id=<?php echo $row['numero']?>">Supprimer</a></button>
                </td>
            </tr>
            <?php
             } 
        ?>
        
    </table>
   <footer>
           <p>Copyright Alassane Sylla - Tous droits de réservés © | Vidéooo ! 2020<br/><a href="mailto:papialou90gmail.com">Me contacter !</a>
           </p>
   </footer>
    </body>
</html>
