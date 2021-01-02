<?php
	require_once "C:\wamp64\www\ProjWeb\master\config2.php";
	require_once 'C:\wamp64\www\ProjWeb\master\Model\NewsLetter.php';
	require_once 'C:\wamp64\www\ProjWeb\master\Model\Articles.php';

	class NewsLetterC
	{
		public function ajouterNewsLetter($email)
		{
			$sql = 'INSERT INTO newsletter (Email) VALUES (:Email)';
		$db = config::getConnexion();

		try {
			$query = $db->prepare($sql);

			$query->execute([
				'Email' => $email->getEmail()
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
		}
		public function afficherNewsLetter()
		{
			$sql = "SELECT * FROM newsletter";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
		}
		 
		public function supprimerNewsLetter($idVisiteur)
		{
			$sql = "DELETE FROM newsletter WHERE IdNewsLetter = :IdNewsLetter";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':IdNewsLetter', $idVisiteur);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
		}


		
	}
 ?>