<?php
//connexion à la base
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
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
if (isset($_POST['dn'])) {
  $dn = $_POST['dn'];
  echo $dn;
}
if ($dn == null){
  echo ("dn est vide!!!!!!");
}

if (isset($_POST['login'])) {
  $login=$_POST['login'];
  echo $login;
}
if ($login == null){
   echo ("login est vide!!!!!!");
}
if (isset($_POST['pass'])) {
  $pwd=$_POST['pass'];
  echo $pwd;
}
if ($pwd == null){
   echo ("password est vide!!!!!!");
}
$role="admin";

$req="INSERT INTO `utilisateur` (`nom`,`prenom`,`date_de_naissance`,`login_name`,`mot_de_passe`,`role`) values ('".$nom."','".$prenom."','".$dn."','".$login."','".$pwd."','".$role."'); ";
$conn->query($req);

?>