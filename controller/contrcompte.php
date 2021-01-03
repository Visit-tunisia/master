<?PHP
    include "D:/wamp/www/project/master/config.php";
    require_once 'D:/wamp/www/project/master/Model/compte.php';

class compteC
{
    public function ajoutercompte($compte)
    {
        $sql = "INSERT INTO compte(login,prenom,nom,mail,datedenaissance,password) 
			VALUES (:login,:prenom,:nom,:mail,:datedenaissance,:password)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'login' => $compte->login(),
                'prenom' => $compte->getprenom(),
                'nom' => $compte->getnom(),
               
                'mail' => $compte->getmail(),
                'datedenaissance'=> $compte->getdatedenaissance(),
                
                'pass'=> $compte->getpass()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function Affichercompte()
    {

        $sql = "SELECT * FROM compte";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function supprimercompte($idUtili)
    {
        $sql = "DELETE FROM compte WHERE idUtili = :idUtili";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idUtili', $idUtili);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function modifiercompte($compte, $idUtili)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE compte SET 
						nom = :nom,
						prenom= :prenom,
                        login = :login,
                        datedenaissance =:datedenaissance,
                        
                         password = :password,
                         mail = :mail
                       
                        
					WHERE idUtili = :idUtili'
            );
            $query->execute([
                'nom' => $compte->getnom(),
                'prenom' => $compte->getprenom(),
                'login' => $compte->getlogin(),
            
                
                'datedenaissance'=> $compte->getdatedenaissance(),
                'password'=> $compte->getpassword(),
                'mail'=> $compte->getmail(),
                'idUtili' => $idUtili
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    function recuperercompte($idUtili){
        $sql="SELECT * from compte where idUtili =$idUtili";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $user=$query->fetch();
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



    function sortdate1()
    {
        $sql = "SELECT * from compte order by login desc";
        $db = config::getConnexion();
        try {
            $compte = $db->query($sql);
            return $compte;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate2()
    {
        $sql = "SELECT * from compte order by nom asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate3()
    {
        $sql = "SELECT * from compte order by prenom desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate4()
    {
        $sql = "SELECT * from compte order by password asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recherche($search_value)
    {
        $sql = "SELECT * FROM compte where  idUtili like '$search_value' or  mail like '%$search_value%' or nom like '%$search_value%' or prenom like '%$search_value%'or login like '%$search_value%' ";

        //global $db;
        $db = Config::getConnexion();

        try {
            $result = $db->query($sql);

            return $result;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



   
}
