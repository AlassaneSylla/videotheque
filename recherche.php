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


                            