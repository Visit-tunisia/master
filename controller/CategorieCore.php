<?php  
       
   
    class CategorieCore {

	function ajouterCategorie($categorie){

		$sql="insert into categorie (idcat,nomcat) values (default,:nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		 
          $nom=$categorie->getNom();

		$req->bindValue(':nom',$nom);
            $req->execute();
           
        }
        catch (Exception $e){
         echo 'Erreur: '.$e->getMessage();
       }
		
	}
	
	
	function afficherCategories(){
		$sql="SElECT * from categorie ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	

	function supprimerCategorie($idcat){
		$sql="DELETE FROM categorie where idcat= :idcat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idcat',$idcat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
          die('Erreur: '.$e->getMessage());
        }
	}


//////////////////////////////////////////////////////////


function recupererCategorie($idcat){
		$sql="SELECT * from categorie where idcat=$idcat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	////////////////////////////////////////////



	function modifierCategorie($id,$nom){
		$sql="UPDATE categorie SET nomcat='$nom' WHERE idcat='$id'";
		
		$db = config::getConnexion();
		try{
				$db->query($sql);
				
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	}






	
?>

