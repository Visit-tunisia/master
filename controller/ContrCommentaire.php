<?php

require_once "C:\wamp64\www\ProjWeb\master\config2.php";
require_once 'C:\wamp64\www\ProjWeb\master\Model\Commentaire.php';

class CommentaireC
{
	public function ajouterCommentaire($c, $idS)
	{
		$sql = 'INSERT INTO commentaire (texte,IdArticle) VALUES (:texte,:IdArticle)';
		$db = config::getConnexion();
		//$req = $db->prepare($sql);

		//$req->bindValue(':texte', $c->getTexte());
		//	$req->bindValue(':dateCommentaire', $c->getDateCommentaire());
		//	$req->bindValue(':idNewsArticle', $idS);
		//$req->bindValue(':idUsers', $idU);
		//$req->execute();

		try {
			$query = $db->prepare($sql);

			$query->execute([
				'texte' => $c,
				//'dateCommentaire' => $c->getDateCommentaire(),
				'IdArticle' => $idS
				//'idUsers' => $idU

			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}


	public function afficherCommentaires()
	{
		$db = config::getConnexion();
		$sql = 'SELECT c.IdCommentaire ,c.IdArticle, c.texte FROM commentaire c, articles a
			WHERE c.IdArticle = a.IdArticle ';
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}


	public function afficherCommentairesarticle($idS)
	{
		$db = config::getConnexion();
		$sql = 'SELECT a.IdArticle,c.texte,c.IdCommentaire FROM commentaire as c
				INNER JOIN Articles as a
				ON c.IdArticle = a.IdArticle AND a.IdArticle = :IdArticle;';
		$req = $db->prepare($sql);
		$req->bindValue(':IdArticle', $idS);
		$req->execute();
		$result = $req->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}


	public function supprimerCommentaire($idC)
	{
		$db = config::getConnexion();
		$sql = 'DELETE FROM commentaire WHERE IdCommentaire = :IdCommentaire';
		$req = $db->prepare($sql);
		$req->bindValue(':IdCommentaire', $idC);
		$req->execute();
	}


	public function verifierCommentaire($texte)
	{

		$words = explode(" ", $texte);
		$words = array_map('strtolower', $words);

		$notAllowed = array('shit', 'noob', 'fuck', 'damn', 'hell', 'crap', 'idiot');

		$result = array_intersect($words, $notAllowed);

		if (count($result) != 0) {
			return 0;
		} else {
			return 1;
		}
	}

	public function nbrCommentairesTotale()
	{
		$sql = "SELECT COUNT(*) AS sum FROM commentaire";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->execute();
		$result = $req->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function nbrCommentairesbyarticle($ida)
	{
		$sql = "SELECT COUNT(*) AS sum FROM commentaire  WHERE IdArticle = :IdArticle;";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':IdArticle', $ida);
		$req->execute();
		$result = $req->fetch(PDO::FETCH_OBJ);
		return $result;
	} 
}
