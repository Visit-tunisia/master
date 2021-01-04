<?PHP
    require_once "C:\wamp64\www\ProjWeb\master\config2.php";
    require_once 'C:\wamp64\www\ProjWeb\master\Model\lieu.php';

class lieuC
{



    public function afficherLieu()
    {
        
        $sql = "SELECT * FROM lieuevenement";
        
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererLieu($id)
    {
        $sql = "SELECT * from lieuevenement where idL=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function sortdate($type)
    {
        $sql = "SELECT * from lieuevenement order by capaciteL $type";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

}
