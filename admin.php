<?php 
	include('database/connection.php');
    include('database/fonctions.php');
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    $user=getUser($email,$mdp);
    if($user!=null){
        session_start();
        $_SESSION['admin']=$user[0];
        header('Location:../crud/');
    }else header('Location:../login.php?error=0');
?>