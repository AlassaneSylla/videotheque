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
    
    <form class="formulaireAjout" method="post" action="traitementFilm.php">
        <fieldset>
            <legend>AJOUTER FILM</legend>
            <label>TITRE : </label>
            <input id="champ1" type="text" name="nomFilm" autofocus="" required=""/><br> 
            <label>SYNOPSIS : </label>
            <textarea type="text" id="champ2" name="synopsis" rows="8" cols="45"></textarea><br>
            <label>DATE : </label>
            <input id="champ3" type="date" name="date"><br>
            <label>IMAGE : </label>
            <input id="champ4" type="file" name="image"><br>
            <label>TYPE : </label>
            <select id="champ5" name="type" type="text">
                <option selected="selected"></option>
                <option>fiction</option>
                <option>action</option>
                <option>drame</option>
                <option>comedie</option>
           </select><br>
            <label>PRIX : </label>
            <input id="champ6" type="text" name="prix"> FCFA<br>
               <label></label>
            <input class="button_form" type="submit" name="bouton" value="AJOUTER"> 
        </fieldset>
    </form> 
   <footer>
           <p>Copyright Alassane Sylla - Tous droits de réservés © | Vidéooo ! 2020<br/><a href="mailto:papialou90gmail.com">Me contacter !</a>
           </p>
   </footer>
    
     <!-- <script src="js/sweetalert2.js"></script>
        <script type="text/javascript">
           function validation(){
               var champ1 = document.getElementById('champ1').value;
               var champ6 = document.getElementById('champ6').value;
               if(champ1 == NaN) || (champ6 !== 0){
                   Swal.fire('Good job!','You clicked the button!',
                      'success');
               } 
               else{
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Something went wrong!',
                      footer: '<a href>Why do I have this issue?</a>'});
               }   
            } 
        </script>-->
    </body>
</html>

