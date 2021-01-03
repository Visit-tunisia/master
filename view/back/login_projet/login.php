<?php
include_once 'config.php';
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$error="";

$sql="SELECT * from compte where login='$login';";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==0) 
{
    $error="login invalide";
}
else
{
    $sql="SELECT password from compte where login='$login'; ";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $hashed_password=$row['password'];
    if (!  password_verify($password, $hashed_password) )
    {
      $error="Mot de passe invalide";
    }
    else
    {
    $sql="SELECT * from compte where login='$login' and ban=0";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==0) 
    {
      $error="Votre compte est suspendu";
    }
    else
    {
        $sql="SELECT nom from compte where login='$login';";
        $nom=mysqli_query($conn,$sql);
        $_SESSION["login"] = $login;
        mysqli_query($conn,"update utilisateurs set loggedin=1 where login='$login';");
        header("Location: inscription..html");
        
    }
    }
}
if ($error!='') {
  header("Location: login.php?msg=$error");
}
?>