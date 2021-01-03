<?php 
require_once "C:\wamp64\www\project\master\config3.php";
$db = config::getConnexion();

$sql = "SELECT count(*) from utilisateur where sexe='h' ";
$sql1 = "SELECT count(*) from utilisateur where sexe='f' ";
try {
    $liste = $db->query($sql);
    $liste2 = $db->query($sql1);
    $row1 = [];
    $table = Array();
    foreach($liste as $row){            
        $row1['h'] =$row['count(*)'];
    } 
    foreach($liste2 as $row){            
        $row1['f'] =$row['count(*)'];
    }     
    $table[]=$row1;
    
    echo(json_encode($table));
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
?>
