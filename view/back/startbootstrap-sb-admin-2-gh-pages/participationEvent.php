<?php 
require_once "C:\wamp64\www\project\master\config3.php";
$db = config::getConnexion();

$sql = "SELECT idEv,nomEv from evenement ";
try {
    $liste = $db->query($sql);
    $table = Array();
    foreach($liste as $row){  
        $sql2 = "SELECT COUNT(*) from reservation where idEv= ".$row['idEv'];
        $res2 = $db->query($sql2);
        foreach($res2 as $r){
           
            $row['nbParticipation'] =$r['COUNT(*)'];
        }
        
        $table[]=$row;
    }
    echo(json_encode($table));
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
?>
