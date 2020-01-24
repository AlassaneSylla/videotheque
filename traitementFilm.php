<?php
    require('conn.php');//recuperer le fichier
    extract($_POST);
    $nom=$_POST['nomFilm'];
    $nom = addslashes($nom);
    $synopsis=$_POST['synopsis'];
    $synopsis = addslashes($synopsis);
    $datem=$_POST['date'];
    $image=$_POST['image'];
    $type=$_POST['type'];
    $prix=$_POST['prix'];


    /*$target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["champ4"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["bouton"])) {
        $check = getimagesize($_FILES["champ4"]["tmp_name"]);
        if($check !== false) {
            echo "Fichier image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "Ce fichier n'est pas un fichier image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Ce fichier existe dejas.";
        $uploadOk = 0;
    } 
    // Check file size
    if ($_FILES["champ4"]["size"] > 500000) {
        echo "Ce fichier est trop large.";
        $uploadOk = 0;
    } 
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Seulement les fichiers JPG, JPEG, PNG & GIF sont autorirés.";
        $uploadOk = 0;
    } 
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["champ4"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["champ4"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
    $uploadOk= $image;*/

/*if(isset($_POST['bouton']))
{
    $maxSize = 50000;
    $valideExtension = array('.jpg', '.jpeg', '.gif', '.png');

    if($_FILES['uploaded_file']['error'] > 0)
    {
        echo 'une erreur est survenue lors du telechargement';
        die;
    }
    $fileSize = $_FILES['uploaded_file']['size'];
    if($fileSize > $maxSize)
    {
        echo 'le fichier est trop gros';
        die;
    }
    $fileName = $_FILES['uploaded_file']['name'];
    $fileExtension = "." .strtolower(substr(strchr($fileName, '.'), 1));
    if(in_array($fileExtension, $valideExtension))
    {
        echo "le fichier n'est pas une image";
        die;
    }
    $tmpName = $_FILES['uploaded_file']['tmp_name'];
    $uniaName = md5(uniqid(rand(). true));
    $fileName = "images/".$uniaName.$fileExtension; 
    $image = move_uploaded_file($tmpName, $fileName);

    if(resultat)
    {
        echo 'fichier telecharger';
    }


}*/

        
    //inserer
    $sql = "INSERT INTO films (nom, synopsis, annee, image, type, prix) VALUES ('$nom', '$synopsis', '$date',  '$image','$type', '$prix')";

    $resultat = mysqli_query($conn,$sql);

    if ($resultat){
        $message = 'Insertion reussie';
        header('location:films.php?sms='.$message);
    }
    else{
        echo 'Linsertion a echoué';
    }

    
?>