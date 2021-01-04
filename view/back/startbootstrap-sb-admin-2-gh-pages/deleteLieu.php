<?php

$servername = "localhost";
$username = "root";
$password = "";
												

//PDO Database Connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=visit_tunisia", $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
 echo 'Connection failed: ' . $e->getMessage();
}

if (isset($_POST['idL'])) {
    $id = $_POST['idL'];
    echo "aaaaaa";
    echo $id;
}
if ($id == null){
    echo ("id est vide!!!!!!");
}

    // create PDO instance; assign it to $db variable
    // $sql = "DELETE FROM `evenement` WHERE `idEv` ='".$id."' LIMIT 1;";
    // sql to delete a record
  $sql = "DELETE FROM lieuevenement WHERE idL='".$id."'";
     $conn->exec($sql);


header('Location: http://localhost/ProjWeb/master/view/back/startbootstrap-sb-admin-2-gh-pages/lieu.php');
exit();
?>