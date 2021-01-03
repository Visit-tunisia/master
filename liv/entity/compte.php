<?php 
 class compte {

  private $id;
    private $username;
    private $nom;
    private $prenom;
    private $pasword;
	private $numero;
  private $email;
 

   
      public function __construct($username,$nom,$prenom,$pasword,$numero,$email)
  {
    
		$this->username=$username;
		$this->nom=$nom;
    $this->prenom=$prenom;
    $this->pasword=$pasword;
		$this->numero=$numero;
    $this->email=$email;
   

  }
	public function getid()
	{
		return $this->id;
	}
	public function setid($id)
	{
		$this->id=$id;
  }
 

  public function getusername()
  {
    return $this->username;
  }
  public function setusername($username)
  {
    $this->username=$username;
  }
  public function getnom()
  {
    return $this->nom;
  }
  public function setnom($nom)
  { 
    $this->nom=$nom;
  }
  public function getprenom()
  {
    return $this->prenom;
  }
  public function setprenom($prenom)
  { 
    $this->prenom=$prenom;
  }
  public function getnumero()
  {
    return $this->numero;
  }
  public function setnumero($numero)
  {
    $this->numero=$numero;
  }
  public function getpasword()
  {
    return $this->pasword;
  }
  public function setpasword($pasword)
  {
    $this->pasword=$pasword;
  }
public function getemail()
  {
    return $this->email;
  }
  public function setemail($email)
  {
    $this->email=$email;
  }
 
}

?>