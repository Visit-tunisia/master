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

  $idL = $_POST['idL'];
 
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


// $req="INSERT INTO `evenement` (`nomEv`,`dateEv`,`idL`,`nbpEv`,`pdiscripEv`,`imageEv`,`discripEv`) values ('".$nomEv."','".$dateEv."','".$idL."','".$nbpEv."','".$pdiscripEv."','".$imageEv."','".$discripEv."'); ";
// $conn->query($req);
$req=" INSERT INTO evenement (nomEv,dateEv,idL,nbpEv,pdiscripEv,imageEv,discripEv) values (?,?,?,?,?,?,?) ";
$stmt= $conn->prepare($req);
$stmt->execute([$nomEv, $dateEv, $idL, $nbpEv,$pdiscripEv,$imageEv,$discripEv]);

header('Location: http://localhost/project/master/view/temp/generic.php');
exit();

?>