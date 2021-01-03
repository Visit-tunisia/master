<?php

class compte
{
    private $login;
    private $prenom;
    private $nom;
    private $mail;
    private $datedenaissance;
    private $password;
    private $role;
    



    public function getidUtili()
    {
        return $this->idUtili;
    }

    public function getlogin()
    {
        return $this->login;
    }
    public function getprenom()
    {
        return $this->prenom;
    }
    public function getnom()
    {
        return $this->nom;
    }
    public function getmail()
    {
        return $this->mail;
    }
    public function getdatedenaissance()
    {
        return $this->datedenaissance;
    }

    public function getpassword()
    {
        return $this->password;
    }
    
    
    

    public function setlogin($login)
    {
        $this->login = $login;
    }
    public function setprenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setnom($nom)
    {
        $this->nom = $nom;
    }
    public function setmail($mail)
    {
        $this->mail = $mail;
    } 
    public function setdatedenaissance($datedenaissance)
    {
        $this->datedenaissance = $datedenaissance;
    } 
    public function setpass($password)
    {
        $this->password = $password;
    }
    
    

    public function __construct($nom, $prenom, $login, $datedenaissance, $password, $mail)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->datedenaissance = $datedenaissance;
        $this->password = $password; 
        $this->mail = $mail;
        

    }
}
