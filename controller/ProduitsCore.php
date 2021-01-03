<?php  
       
   
    class ProduitsCore {

	function ajouterProduits($produits){
		/*$sql1 = "select * from categorie where nomcat=:cat";
		$db1 = config::getConnexion();
		try{
        $req1=$db1->prepare($sql1);
		 
          $cat=$produits->getcategorie();
           
       
		$req1->bindValue(':cat',$cat);
		
		
           $res=$db->query($sql);
           
        }
        catch (Exception $e){
         echo 'Erreur: '.$e->getMessage();
       }**/

		$sql="insert into produits (idprod,nom,categorie,description,prix,quantite,image) values (default,:nom,:categorie,:description,:prix,:quantite,:image)";
		$db = config::getConnexion();
		//try{
        $req=$db->prepare($sql);
		 
          $nom=$produits->getNom();
           
          //$categorie=$produits->getcategorie();
          $categorie=$produits->getCategorie();
          $description=$produits->getDescription();
         $prix=$produits->getPrix();
                  
                  $quantite=$produits->getQuantite();
                    
                    $image=$produits->getImage();
       
		$req->bindValue(':nom',$nom);
		
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		
		$req->bindValue(':image',$image);
            $req->execute();
           
       // }
       // catch (Exception $e){
        // echo 'Erreur: '.$e->getMessage();
       //}
		
	}
	
	
	function afficherProduits($nom, $cat,$tri){
		if(($nom=="")&&($cat==0)) {
		$sql="SElECT * from produits order by $tri";
		}
		elseif(($nom=="")&&($cat!=0)) {
		$sql="SElECT * from produits where categorie=$cat order by $tri";
		}
		elseif(($nom!="")&&($cat==0)) {
		$sql="SElECT * from produits where nom like '%$nom%' order by $tri";
		}
		elseif(($nom!="")&&($cat!=0)) {
		$sql="SElECT * from produits where nom like '%$nom%' and categorie=$cat order by $tri";
		}
		$db = config::getConnexion();
		//try{
		$liste=$db->query($sql);
		return $liste;
		//}
        //catch (Exception $e){
            //die('Erreur: '.$e->getMessage());
        //}	
	}
	
	function afficherCat($idcat){
		$sql="SElECT nomcat from categorie where idcat = $idcat ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		foreach ($liste as $row) {$nomcat = $row['nomcat'];}
		return $nomcat;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerProduits($idprod){
		$sql="DELETE FROM produits where idprod= :idprod";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idprod',$idprod);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


//////////////////////////////////////////////////////////


function recupererProduits($idprod){
		$sql="SELECT * from produits where idprod=$idprod";
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



	function modifierProduits($idprod, $nom,$idcat,$description,$prix,$quantite){
		$sql="UPDATE produits SET nom=:nom,categorie=:idcat,description=:description,prix=:prix,quantite=:quantite WHERE idprod=:idprod";
		
		$db = config::getConnexion();
		 $req=$db->prepare($sql);
		$req->bindValue(':idprod',$idprod);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':idcat',$idcat);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		try{
            $req->execute();
           
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	}






	
?>

