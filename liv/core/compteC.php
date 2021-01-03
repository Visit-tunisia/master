<?PHP
include_once "../config.php";

class compteC {

	
	

	


	function authentification($username,$pasword){
		$sql="select * from compte where username='".$username."' and pasword='".$pasword."'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
			die('Erreur: '.$e->getMessage());
        }
	}
	function recuperercompteadmin($username,$pasword){
		$admin = "admin%";
		$sql="select * from compte where username='".$username."' and pasword='".$pasword."' and (type = 'admin')";
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