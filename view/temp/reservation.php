<?php
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
$idEv=$_GET['idEv'];

$idUtili=$_SESSION['idUtili'];
$date=date("Y/m/d").'';
$req=" INSERT INTO reservation (dateReservation,idUtili,idEv) values ('".$date."','".$idUtili."','".$idEv."' );";
echo($req);
$stmt= $conn->prepare($req);
$stmt->execute();
$req="UPDATE evenement set nbpEv=nbpEv-1 where idEv='".$idEv."';";
$stmt= $conn->prepare($req);
$stmt->execute();
header('Location: http://localhost/project/master/view/temp/generic.php');
exit();
?>