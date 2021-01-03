<?PHP
    require_once "C:\wamp64\www\ProjWeb\master\config2.php";
    require_once 'C:\wamp64\www\ProjWeb\master\Model\events.php';

class eventC
{

    public function ajouterEvent($article)
    {
        $sql = " INSERT INTO evenement (nomEv,dateEv,datefinEv,idL,nbpEv,pdiscripEv,imageEv,discripEv) values (:nomEv,:dateEv,:datefinEv,:idL,:nbpEv,:pdiscripEv,:imageEv,:discripEv) ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                ':nomEv' => $event->getNomEv(),
                ':dateEv' => $event->getDateEv(),
                ':datefinEv' => $event->getDateFinEv(),
                ':idL' => $event->getIdL(),
                ':nbpEv' => $event->getNbpEv(),
                ':pdiscipEv'=> $event->getPdiscripEv(),
                ':imageEv'=> $event->getImageEv(),
                ':duscripEv'=> $event->getDiscripEv()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherEvent()
    {
        
        $sql = "SELECT * FROM evenement";
        
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimerEvent($id)
    {
        $sql = "DELETE FROM evenement WHERE idEv = :idEv";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idEv', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function modifierEvent($event, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                "UPDATE `evenement` set nomEv=:nomEv,dateEv=:dateEv,idL=:idL,nbpEv=:nbpEv,pdiscripEv=:pdiscripEv,imageEv=:imageEv,discripEv=:discripEv where idEv=$idEv; ");
            $query->execute([
                ':nomEv' => $event->getNomEv(),
                ':dateEv' => $event->getDateEv(),
                ':datefinEv' => $event->getDateFinEv(),
                ':idL' => $event->getIdL(),
                ':nbpEv' => $event->getNbpEv(),
                ':pdiscipEv'=> $event->getPdiscripEv(),
                ':imageEv'=> $event->getImageEv(),
                ':duscripEv'=> $event->getDiscripEv()
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererEvent($id)
    {
        $sql = "SELECT * from evenement where idEv=$id";
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
        $sql = "SELECT * from evenement order by dateEv $type";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

}
