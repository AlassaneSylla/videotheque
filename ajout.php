<!DOCTYPE html>
<html>    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sweetalert2.css">
    <script type="text/javascript"></script>
    <title>Ajout film</title>   
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
                    --><li><a href="ajout.php">VIDER FORMULAIRE</a></li>
                    </ul> 
               </nav>
            </div>  
    </header>
    <section>
            <div class="bienvenu">
                <span class="text1">Veuillez ramplir pour</span>
                <span class="text2">ajouter un film</span>
            </div>
    </section>
    <form class="formulaireAjout" method="post" action="traitementFilm.php" enctype="multipart/form-data">
        <fieldset>
            <legend>AJOUTER FILM</legend>
            <label>TITRE : <em>*</em></label>
            <input id="champ1" type="text" name="nomFilm" autofocus="" required=""/><br> 
            <label>SYNOPSIS : <em>*</em></label>
            <input type="text" id="champ2" name="synopsis" maxlength="1080" required=""></input><br><br>
            <label>DATE : <em>*</em></label>
            <input id="champ3" type="date" name="date" required=""><br>
            <label>IMAGE : <em>*</em></label>
            <input id="champ4" type="file" name="uploadedfile" required=""><br>
            <label>TYPE : <em>*</em></label>
            <select id="champ5" name="type" required="">....<br>
                <option selected="selected"></option>
                <option>fiction</option>
                <option>action</option>
                <option>drame</option>
                <option>comedie</option>
                <option>romance</option> 
                <option>historique</option>
                <option>fantastique</option>
                <option>horreur</option>
           </select><br>
            <label>PRIX : <em>*</em></label>
            <input id="champ6" type="text" name="prix" required=""> FCFA<br>
               <label></label>    
        </fieldset>
        <p><input class="button_form" type="submit" name="bouton" value="AJOUTER"></p>
    </form> 
   <footer>
           <p>Copyright Alassane Sylla - Tous droits de réservés © | Vidéooo ! 2020<br/><br/>
           <a href="#">Me contacter !</a>
           </p>
   </footer>
    </body>
</html>







