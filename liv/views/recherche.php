<?php
function recherche($search_value)
    {
        $sql = "SELECT * FROM livraison where  nom like '$search_value' or  titre like '%$search_value%' or auteur like '%$search_value%' or source like '%$search_value%'or Datearticle like '%$search_value%' ";

        //global $db;
        $db = Config::getConnexion();

        try {
            $result = $db->query($sql);

            return $result;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    ?>
<?php
//la recherche

if (isset($_GET['recherche'])) {
    $search_value = $_GET["recherche"];
    $livraison = $livraison->recherche($search_value);
}
?>