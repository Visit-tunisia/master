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

  if (isset($_POST['idEv'])) {
    $idEv = $_POST['idEv'];
    echo $idEv;
}
if ($idEv== null){
    echo ("idEv est vide!!!!!!");
}
if (isset($_POST['nomEv'])) {
    $nomEv = $_POST['nomEv'];
    echo $nomEv;
}
if ($nomEv== null){
    echo ("nomEv est vide!!!!!!");
}

if (isset($_POST['dateEv'])) {
    $dateEv=$_POST['dateEv'];
    echo $dateEv;
}
if ($dateEv == null){
     echo ("prenom est vide!!!!!!");
}
if (isset($_POST['idL'])) {
  $idL = $_POST['idL'];
  echo $idL;
}
if ($idL == null){
  echo ("idL est vide!!!!!!");
}

if (isset($_POST['nbpEv'])) {
  $nbpEv=$_POST['nbpEv'];
  echo $nbpEv;
}
if ($nbpEv == null){
   echo ("nbpEv est vide!!!!!!");
}
if (isset($_POST['pdiscripEv'])) {
  $pdiscripEv=$_POST['pdiscripEv'];
  echo $pdiscripEv;
}
if ($pdiscripEv == null){
   echo ("pdiscripEv est vide!!!!!!");
}
if (isset($_POST['imageEv'])) {
  $imageEv=$_POST['imageEv'];
  echo $imageEv;
}
if ($imageEv == null){
   echo ("imageEv est vide!!!!!!");
}
if (isset($_POST['discripEv'])) {
  $discripEv=$_POST['discripEv'];
  echo $discripEv;
}
if ($discripEv == null){
   echo ("discripEv est vide!!!!!!");
}


$req="UPDATE `evenement` set nomEv=?,dateEv=?,idL=?,nbpEv=?,pdiscripEv=?,imageEv=?,discripEv=? where idEv=$idEv; ";

$stmt= $conn->prepare($req);
$stmt->execute([$nomEv, $dateEv, $idL, $nbpEv,$pdiscripEv,$imageEv,$discripEv]);
header('Location: http://localhost/project/master/view/back/startbootstrap-sb-admin-2-gh-pages/Event.php');
exit();

?>