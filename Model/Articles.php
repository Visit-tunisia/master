<?php

class article
{
    private $TitreArticle;
    private $DescriptionArticle;
    private $AuteurArticle;
   // private $source;
   // private $urlImage;
  //  private $notifCreateur;
    private $DateArticle;
    private $DateCreation;
    private $ImageUrl;
    private $Status;



    public function getidNewsArticle()
    {
        return $this->IdArticle;
    }

    public function getTitre()
    {
        return $this->TitreArticle;
    }
    public function getTexte()
    {
        return $this->DescriptionArticle;
    }
    public function getAuteur()
    {
        return $this->AuteurArticle;
    }
    public function getImageUrl()
    {
        return $this->ImageUrl;
    }
    public function getStatus()
    {
        return $this->Status;
    }

/*    public function getSource()
    {
        return $this->source;
    }
    
    public function getNotifCreateur()
    {
        return $this->notifCreateur;
    } */
    public function getDatearticle()
    {
        return $this->DateArticle;
    }
    public function getDateCreation()
    {
        return $this->DateCreation;
    }

    public function setTitre($TitreArticle)
    {
        $this->TitreArticle = $TitreArticle;
    }
    public function setTexte($DescriptionArticle)
    {
        $this->DescriptionArticle = $DescriptionArticle;
    }
    public function setAuteurArticle($AuteurArticle)
    {
        $this->AuteurArticle = $AuteurArticle;
    }
    public function setImageUrl($ImageUrl)
    {
        $this->ImageUrl = $ImageUrl;
    } 
    public function setStatus($Status)
    {
        $this->Status = $Status;
    } 
  /*  public function setSource($source)
    {
        $this->source = $source;
    }
    
    public function setNotifCreateur($notifCreateur)
    {
        $this->notifCreateur = $notifCreateur;
    } */
    public function setDatearticle($DateArticle)
    {
        $this->DateArticle = $DateArticle;
    }
    public function setDateCreation($DateCreation)
    {
        $this->DateCreation = $DateCreation;
    }

    public function __construct($TitreArticle, $DescriptionArticle, $AuteurArticle, $DateArticle, $DateCreation, $ImageUrl, $Status)
    {
        $this->TitreArticle = $TitreArticle;
        $this->DescriptionArticle = $DescriptionArticle;
        $this->AuteurArticle = $AuteurArticle;
      /*  $this->source = $source;
        $this->urlImage = $urlImage; 
        $this->notifCreateur = $notifCreateur;*/
        $this->DateArticle = $DateArticle;
        $this->DateCreation = $DateCreation;
        $this->ImageUrl = $ImageUrl;
        $this->Status = $Status;

    }
}
