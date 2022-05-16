<?php 
    $liste=getListe();
    // var_dump($liste['blog'][0]['titre']);
    
    if(isset($_GET['blog'])){
        $oneBlog = getBlog($_GET['blog']);
        // var_dump($oneBlog);
    }
?>