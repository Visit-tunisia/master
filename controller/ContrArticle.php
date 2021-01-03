<?PHP
    include "C:\wamp64\www\ProjWeb\master\config2.php";
    require_once 'C:\wamp64\www\ProjWeb\master\Model\Articles.php';

class articleC
{

    public function ajouterArticle($article)
    {
        $sql = "INSERT INTO articles(TitreArticle,DescriptionArticle,AuteurArticle,DateArticle,DateCreation,ImageUrl,Status) 
			VALUES (:titre,:texte,:auteur,:Datearticle,:Datecreation,:Imageurl,:Status)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'titre' => $article->getTitre(),
                'texte' => $article->getTexte(),
                'auteur' => $article->getAuteur(),
               /* 'source' => $article->getSource(),
                'urlImage' => $article->getUrlImage(),
                'notifCreateur' => $article->getNotifCreateur(), */
                'Datearticle' => $article->getDatearticle(),
                'Datecreation'=> $article->getDateCreation(),
                'Imageurl'=> $article->getImageUrl(),
                'Status'=> $article->getStatus()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function AfficherArticle()
    {

        $sql = "SELECT * FROM articles";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public function AfficherArticlePaginer($page,$perPage)
    {
        $start=($page>1) ? ($page * $perPage) - $perPage : 0;
       // echo $start.' '. $perPage;
       
        $sql = "SELECT * FROM articles LIMIT {$start},{$perPage}";
        $db = config::getConnexion();
        try {
            $liste = $db->prepare($sql);
            $liste->execute();
            $liste=$liste->fetchAll(PDO::FETCH_ASSOC);
            /*$total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            $pages= ceil($total/$perPage);
            echo $pages; */
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
     
     public function calcTotalRows($perPage)
     {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM articles";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            $pages= ceil($total/$perPage);
            return $pages;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
     }





    function supprimerarticle($id)
    {
        $sql = "DELETE FROM articles WHERE IdArticle = :IdArticle";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':IdArticle', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function modifierarticle($article, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE articles SET 
						TitreArticle = :titre, 
						DescriptionArticle= :texte,
						AuteurArticle = :auteur,
                        DateArticle = :Datearticle,
                        DateCreation = :Datecreation,
                        ImageUrl = :Imageurl,
                        Status = :Status
					WHERE IdArticle = :IdArticle'
            );
            $query->execute([
                'titre' => $article->getTitre(),
                'texte' => $article->getTexte(),
                'auteur' => $article->getAuteur(),
                'Datearticle' => $article->getDatearticle(),
                'Datecreation'=> $article->getDateCreation(),
                'Imageurl'=> $article->getImageUrl(),
                'Status'=> $article->getStatus(),
                'IdArticle' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererarticle($id)
    {
        $sql = "SELECT * from articles where IdArticle=$id";
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


    function sortdate1()
    {
        $sql = "SELECT * from articles order by DateArticle desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function sortdate2()
    {
        $sql = "SELECT * from articles order by DateArticle asc";
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
        $sql = "SELECT * from articles order by Datecreation desc";
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
        $sql = "SELECT * from articles order by Datecreation asc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function chercherArticleAuteur($mot)
    {
        $sql = 'SELECT * FROM Articles                
                WHERE AuteurArticle= :LEMOT;';
       $db = config::getConnexion();
       $req = $db->prepare($sql);
       $req->bindValue(':LEMOT', $mot);
        
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_OBJ);


        $liste = json_decode(json_encode($result), true);

        return $liste;  
    }

    public function returnLatestArticle()
    {

        $sql = "SELECT * FROM articles ORDER BY IdArticle DESC LIMIT 1";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();


            $result = json_decode(json_encode($user), true);

            //echo $result['AuteurArticle'];
            return $result;   
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



}
