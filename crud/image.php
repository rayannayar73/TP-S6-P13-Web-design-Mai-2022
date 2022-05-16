<?php
    require('security.php');
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $lieu = $_POST['lieu'];
    $dateIncident = $_POST['date'];
    $alt = $_POST['alt'];

    $filename = basename($_FILES['postImage']['name']);
    $date = date_create('now', new DateTimeZone('Africa/Nairobi'));
    $prefix = date_format($date, "Y-m-d-H-i-s")."-";
    $imageUploadPath = "../images/incidents/".$prefix.$filename;
    $imagePath = "images/incidents/".$filename;
    $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);

    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if(in_array($fileType, $allowTypes)){
        require('../database/fonctions.php');
        $imageTemp = $_FILES['postImage']['tmp_name'];
        $compressedImage = compressImage($imageTemp, $imageUploadPath, 60);
        if($compressedImage){
            insertPost($titre, $description, $lieu, $dateIncident, $alt, $imagePath);
            header('Location: index.php');
        }
    }
?>