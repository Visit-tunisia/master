<?PHP
class produits{
	
	protected $nom;
	protected $id ;
	protected $categorie;
	protected $description; 
	protected $prix;
	protected $quantite;
	
	protected $image;
	
	
	function __construct($id,$nom,$categorie,$description,$prix,$quantite,$image){
		
		$this->nom=$nom;
		$this->id=$id;
		$this->categorie=$categorie;
		$this->description=$description;
		$this->prix=$prix;
		$this->quantite=$quantite;
			$this->image=$image;

	}
	function getid(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	
	function getcategorie(){
		return $this->categorie;
	}
	function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	function getDescription(){
		return $this->description;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function getPrix(){
		return $this->prix;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	
	function getImage(){
		return $this->image;
	}
	function setImage($image){
		$this->image=$image;
	}
	
	
}

?>