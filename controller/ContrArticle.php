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

					/*	source = :source,
						urlImage = :urlImage,
                        notifCreateur = :notifCreateur, */
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
             /*   'source' => $article->getSource(),
                'urlImage' => $article->getUrlImage(),
                'notifCreateur' => $article->getNotifCreateur(), */
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
}
