<?php 

class NewsLetter
{
	private $Email;
//	private $dateCommentaire;
	

	
	public function getEmail()
	{
		return $this->Email;
	}
	//public function getDateCommentaire(){return $this->dateCommentaire;}
	
	public function setEmail($Email)
	{ 
		$this->Email=$Email;
	}
	//public function setDateCommentaire($dateCommentaire){ $this->dateCommentaire=$dateCommentaire;}
	
	
	public function __construct($Email)
	{
		
		$this->Email=$Email;
		//$this->dateCommentaire=$dateCommentaire;
		
	}
}


 ?>