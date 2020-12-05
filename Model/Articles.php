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
/*    public function getSource()
    {
        return $this->source;
    }
    public function getUrlImage()
    {
        return $this->urlImage;
    }
    public function getNotifCreateur()
    {
        return $this->notifCreateur;
    } */
    public function getDatearticle()
    {
        return $this->DateArticle;
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
  /*  public function setSource($source)
    {
        $this->source = $source;
    }
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;
    } 
    public function setNotifCreateur($notifCreateur)
    {
        $this->notifCreateur = $notifCreateur;
    } */
    public function setDatearticle($DateArticle)
    {
        $this->DateArticle = $DateArticle;
    }

    public function __construct($TitreArticle, $DescriptionArticle, $AuteurArticle, $DateArticle)
    {
        $this->TitreArticle = $TitreArticle;
        $this->DescriptionArticle = $DescriptionArticle;
        $this->AuteurArticle = $AuteurArticle;
      /*  $this->source = $source;
        $this->urlImage = $urlImage; 
        $this->notifCreateur = $notifCreateur;*/
        $this->DateArticle = $DateArticle;
    }
}
