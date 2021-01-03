<?PHP
include_once "../config.php";
class livreurC {
function afficherlivreur ($livreur){
		echo "Cin: ".$livreur->getCin()."<br>";
		echo "Nom: ".$livreur->getNom()."<br>";
		echo "Prénom: ".$livreur->getPrenom()."<br>";
		echo "email: ".$livreur->getEmail()."<br>";
		echo "secteur: ".$livreur->getSecteur()."<br>";
		echo "etat: ".$livreur->getEtat()."<br>";

	}
	function ajouterlivreur($livreur){
		$sql="insert into livreur (cin,nom,prenom,email,etat) values (:cin, :nom,:prenom,:email,:etat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $cin=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
		$email=$livreur->getEmail();
		
		$etat=$livreur->getEtat();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		
		$req->bindValue(':etat',$etat);		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreurs(){
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherlivreurs2(){
		$etat="libre";
		$sql="SElECT * From livreur where etat='".$etat."' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function supprimerlivreur($id){
		$sql="DELETE FROM livreur where id= :id";
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
	function modifierlivreur($livreur,$id){
		$sql="UPDATE livreur SET cin=:cinn, nom=:nom,prenom=:prenom,email=:email WHERE id=:id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$cinn=$livreur->getCin();
        $nom=$livreur->getNom();
        $prenom=$livreur->getPrenom();
		$email=$livreur->getEmail();
	
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':email'=>$email,':secteur'=>$secteur,':etat'=>$etat);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
	
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererlivreur($id){
		$sql="SELECT * from livreur where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherlivreursT(){
		$sql="SElECT * From livreur ORDER BY nom ";
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
	
	function rechercherListelivreurs($secteur){
		$sql="SELECT * from livreur where secteur=$secteur";
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