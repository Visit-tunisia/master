<?php
include_once "..\config.php";
include "../entity/livraison.php";

function sortdate1()
    {
        $sql = "SELECT * from livraison order by nom desc";
        $db = config::getConnexion();
        try {
            $livraison = $db->query($sql);
            return $livraison;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate2()
    {
        $sql = "SELECT * from livraison order by adress asc";
        $db = config::getConnexion();
        try {
            $livraison = $db->query($sql);
            return $livraison;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate3()
    {
        $sql = "SELECT * from livraison order by date_livraison desc";
        $db = config::getConnexion();
        try {
            $livraison = $db->query($sql);
            return $livraison;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
  ?>
