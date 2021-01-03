<?PHP
class categorie{
	
	protected $idcat;
	protected $nomcat ;
	
	
	function __construct($id,$nom){
		
		$this->idcat=$id;
		$this->nomcat=$nom;
		
	}
	function getid(){
		return $this->idcat;
	}
	function getNom(){
		return $this->nomcat;
	}
	function setNom($nom){
		$this->nomcat=$nom;
	}
	
	
}

?>