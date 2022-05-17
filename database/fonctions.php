<?php
function compressImage($source, $destination, $quality)
{
    $imgInfo = getimagesize($source);
    $mime = $imgInfo['mime'];
    switch ($mime) {
        case 'img/jpeg':
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, $quality);
            break;
        case 'image/jpeg':
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, $quality);
            break;
        case 'img/png':
            $image = imagecreatefrompng($source);
            imagepng($image, $destination, $quality);
            break;
        case 'image/png':
            $image = imagecreatefrompng($source);
            imagepng($image, $destination, $quality);
            break;
        case 'image/gif':
            $image = imagecreatefromgif($source);
            imagegif($image, $destination, $quality);
            break;
        default:
            $image = imagecreatefromjpeg($source);
            imagejpeg($image, $destination, $quality);
    }
    return $destination;
}

function insertPost($titre, $description, $lieu, $date, $alIimage, $urlImage)
{
    require_once('connection.php');
    $bdd = dbconnect();
    $url = slugify($titre, '-');
    $date = date_create('now', new DateTimeZone('Africa/Nairobi'));
    $req = "INSERT INTO blog(titre, description, lieu, dateIncident, altImage, urlImage) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')";
    $req = sprintf($req, $bdd->escape_string($titre), $bdd->escape_string($description), $lieu, date_format($date, "Y-m-d H:i:s"), $alIimage, $urlImage);
    var_dump($req);
    mysqli_query($bdd, $req);
}

function supprimerBlog($id){
    $bdd = dbconnect();
    $req = "Delete from blog where id=%s";
    $req = sprintf($req, $id);
    mysqli_query($bdd, $req);
}

function tableToArray($req)
{
    $bdd = dbconnect();
    $retour = array();
    $i = 0;
    $result = mysqli_query($bdd, $req);
    if($result){
        while ($donnees = mysqli_fetch_assoc($result)) {
            $retour[$i] = $donnees;
            $i++;
        }
        mysqli_free_result($result);
        return $retour;
    }
    else{
        return false;
    }    
}
function getUser($login, $mdp){
    $req = "select * from admin where mail='%s' and mdp=sha1('%s')";
    $req = sprintf($req, $login, $mdp);
    return tableToArray($req);
}

function getListe()
{
    $req = "Select * from blog";
    $blog =  tableToArray($req);
    return array(
        'blog' => $blog,
    );
}
function getListe3()
{
    $req = "Select * from blog limit 3";
    $blog =  tableToArray($req);
    return array(
        'blog' => $blog,
    );
}

function getBlog($id)
{
    $req = "select * from blog where id = '%s'";
    $req = sprintf($req, $id);
    return tableToArray($req)[0];
}

function slugify($text, $divider = '-')
{
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    $text = preg_replace('~[^-\w]+~', '', $text);
    $text = trim($text, $divider);
    $text = preg_replace('~-+~', $divider, $text);
    $text = strtolower($text);
    if (empty($text)) {
        return 'n-a';
    }
    return $text;
}
