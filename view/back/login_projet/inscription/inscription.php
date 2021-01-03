<?php
//connexion à la base
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=util", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    echo $nom;
}
if ($nom == null){
    echo ("nom est vide!!!!!!");
}

if (isset($_POST['prenom'])) {
    $prenom=$_POST['prenom'];
    echo $prenom;
}
if ($prenom == null){
     echo ("prenom est vide!!!!!!");
}
if (isset($_POST['datedenaissance'])) {
  $datedenaissance=$_POST['datedenaissance'];
  echo $datedenaissance;
}
if ($datedenaissance == null){
  echo ("datedenaissance est vide!!!!!!");
}

if (isset($_POST['login'])) {
  $login=$_POST['login'];
  echo $login;
}
if ($login == null){
   echo ("login est vide!!!!!!");
}
if (isset($_POST['password'])) {
  $password=$_POST['password'];
  echo $password;
}
if ($password == null){
   echo ("password est vide!!!!!!");
}
if (isset($_POST['mail'])) {
  $mail=$_POST['mail'];
  echo $mail;
}
if ($mail == null){
   echo ("mail est vide!!!!!!");
}
$role="admin";

$req="INSERT INTO `compte` (`nom`,`prenom`,`datedenaissance`,`login`,`password`,`mail`) values ('".$nom."','".$prenom."','".$datedenaissance."','".$login."','".$password."','".$mail."'); ";
$conn->query($req);
header('Location:../../../temp/comptea.php');


?>