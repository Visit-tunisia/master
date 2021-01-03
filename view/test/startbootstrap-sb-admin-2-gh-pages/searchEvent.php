<?php
require_once "C:\wamp64\www\project\master\config3.php";
$db = config::getConnexion();
$search = $_GET['search'];
$sql = "SELECT idL,emplacementL from lieuevenement where emplacementL like '$search%'";
try {
    $liste = $db->query($sql);
    $table = Array();
    foreach($liste as $row){   
        $sql2 = "SELECT * from evenement where idL= ".$row['idL'];
        $res = $db->query($sql2);
        foreach($res as $r){
            $r['emplacement']=$row['emplacementL'];
            $table[]=$r;
        }
    }
    echo(json_encode($table));
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
?>