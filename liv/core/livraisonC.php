<?PHP
include_once "..\config.php";

class livraisonC {
function afficherlivraison ($livraison){
		echo "idclient: ".$livraison->getidclient()."<br>";
		echo "nom: ".$livraison->getNom()."<br>";
		echo "adresse: ".$livraison->getadresse()."<br>";
		echo "numtel: ".$livraison->getnumtel()."<br>";
		echo "numcommande: ".$livraison->getnumcommande()."<br>";
		echo "date_livraison: ".$livraison->getdate_livraison()."<br>";
		echo "total: ".$livraison->gettotal()."<br>";
	}
	function ajouterlivraison($livraison,$notif){
		$sql="insert into livraison (idclient,nom,adress,numtel,numcommande,total,etat,notifications) values ( :idclient,:nom,:adress,:numtel,:numcommande,:total,:etat,:notifications)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$livraison->getNom();
        $adress=$livraison->getadresse();
        $numtel=$livraison->getnumtel();
		$numcommande=$livraison->getnumcommande();
		
		$total=$livraison->gettotal();
        $idclient=$livraison->getidclient();
        $etat=$livraison->getetat();
	

        $req->bindValue(':nom',$nom);
        $req->bindValue(':idclient',$idclient);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':numtel',$numtel);
        $req->bindValue(':numcommande',$numcommande);
		
		$req->bindValue(':total',$total);
        $req->bindValue(':etat',$etat);
		$req->bindValue(':notifications',$notif);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivraisons(){
		$etat="nom_traiter";
		$sql="SElECT * From livraison where etat= 'non_traiter'";
		$db = config::getConnexion();
		try{
            
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherlivraisonsadmin(){
		$etat="nom_traiter";
		$sql="SElECT * From livraison ";
		$db = config::getConnexion();
		try{
            
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherlivraisonsT(){
		$sql="SElECT * From livraison ORDER BY nom ";
		//$sql="SElECT * From panier";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}

	function supprimerlivraison($id){
		$sql="DELETE FROM livraison where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivraison($livraison,$id){
		$sql="UPDATE livraison SET  nom=:nom,adress=:adress,numtel=:numtel WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$livraison->getnom();
        $adresse=$livraison->getadresse();
        $numtel=$livraison->getnumtel();
        $idclient=$livraison->getidclient();
        $numcommande=$livraison->getnumcommande();
        $total=$livraison->getnumtel();
        $etat=$livraison->gettotal();

		$datas = array(':idclient'=>$idclient,':nom'=>$nom,':adress'=>$adresse,':numtel'=>$numtel,':numcommande'=>$numcommande,':total'=>$total,':etat'=>$etat);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':adress',$adresse);
		$req->bindValue(':numtel',$numtel);	
        $req->bindValue(':id',$id);

            $s=$req->execute();
			
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function traiter($id){
		$etat="traiter";
		$sql="UPDATE livraison SET  etat=:etat WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        

		//$datas = array(':idclient'=>$idclient,':nom'=>$nom,':adress'=>$adresse,':numtel'=>$numtel,':numcommande'=>$numcommande,':total'=>$total,':etat'=>$etat);
		$req->bindValue(':etat',$etat);
		
        $req->bindValue(':id',$id);

            $s=$req->execute();
			
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivraison($id){
		$sql="SELECT * from livraison where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function  updatenotification(){
		$notifications="true";
		$notificationsfalse="false";
		$sql="UPDATE livraison SET  notifications=:notifications WHERE notifications=:notificationsfalse";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        

		//$datas = array(':idclient'=>$idclient,':nom'=>$nom,':adress'=>$adresse,':numtel'=>$numtel,':numcommande'=>$numcommande,':total'=>$total,':etat'=>$etat);
		$req->bindValue(':notifications',$notifications);
		
        $req->bindValue(':notificationsfalse',$notificationsfalse);

            $s=$req->execute();
			
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function selectnotification(){
		$chainevide="false";
		$etat="traiter";
		$sql="SELECT * from livraison where notifications='".$chainevide."' AND etat='".$etat."' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}

?>