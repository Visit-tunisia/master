<?PHP
class livreur{
	private $cin;
	private $nom;
	private $prenom;
	private $email;
	private $etat;
	
	function __construct($cin,$nom,$prenom,$email,$etat){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		
		$this->etat=$etat;
	
	}

	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	
    function getEtat(){
		return $this->etat;
	}
	 function getEmail(){
		return $this->email;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setEmail($email){
		$this->email=$email;
	}
}

?>