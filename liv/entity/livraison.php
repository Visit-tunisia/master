<?PHP
class livraison{
	private $idclient;
	private $nom;
	private $adresse;
	private $numtel;
	private $numcommande;
	
	private $date_livraison;
    private $total;
	private $etat;
	function __construct($idclient,$nom,$adresse,$numtel,$numcommande,$total,$etat){
		$this->idclient=$idclient;
  		$this->nom=$nom;
		$this->adresse=$adresse;
		$this->numtel=$numtel;
		$this->numcommande=$numcommande;
		

		$this->total=$total;
		$this->etat=$etat;
    }
    
	
	function getidclient(){
		return $this->idclient;
	}
	function getnom(){
		return $this->nom;
    }
    function getetat(){
		return $this->etat;
	}
	function getadresse(){
		return $this->adresse;
	}
	function getnumtel(){
		return $this->numtel;
	}
	function getnumcommande(){
		return $this->numcommande;
	}
	
	function getdate_livraison(){
		return $this->date_livraison;
	}
	function gettotal(){
		return $this->total;
	}

	function setnom($nom){
		$this->nom=$nom;
    }
    function setetat($etat){
		$this->etat=$etat;
	}
	function setadresse($adresse){
		$this->adresse;
	}
	function setnumtel($numtel){
		$this->numtel;
	}
	function setnumcommande($numcommande){
		$this->numcommande;
	}
	function setdate_livraison($date_livraison){
		$this->date_livraison;
	}
	function settotal($total){
		$this->total;
	}
	
}

?>