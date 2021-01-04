<?php
//connexion à la base
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=visit_tunisia", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  if (isset($_POST['idL'])) {
    $idL = $_POST['idL'];
    echo $idL;
}
if ($idL== null){
    echo ("idL est vide!!!!!!");
}
if (isset($_POST['emplacementL'])) {
    $emplacementL = $_POST['emplacementL'];
    echo $emplacementL;
}
if ($emplacementL== null){
    echo ("emplacementL est vide!!!!!!");
}

if (isset($_POST['capaciteL'])) {
    $capaciteL=$_POST['capaciteL'];
    echo $capaciteL;
}
if ($capaciteL == null){
     echo ("capaciteL est vide!!!!!!");
}



$req="UPDATE `lieuevenement` set emplacementL=?,capaciteL=? where idL=$idL; ";

$stmt= $conn->prepare($req);
$stmt->execute([$emplacementL, $capaciteL]);
header('Location: http://localhost/ProjWeb/master/View/back/startbootstrap-sb-admin-2-gh-pages/lieu.php');
exit();

?>