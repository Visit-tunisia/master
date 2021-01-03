<?php
require_once "C:\wamp64\www\project\master\config3.php";
$db = config::getConnexion();
$search = $_GET['search'];
$sql = "SELECT * from lieuevenement where emplacementL like '$search%'";
try {
    $liste = $db->query($sql);
    $table = Array();
    foreach($liste as $row){   

            $table[]=$row;
     
    }
    echo(json_encode($table));
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
?>