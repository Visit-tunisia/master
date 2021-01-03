

<?php

class event
{
    private $nomEv;
    private $dateEv;
    private $dateFinEv;
    private $idL;

    private $nbpEv;
    private $pdiscripEv;
    private $imageEv;
    private $idEv;
    private $discripEv;



    public function getIdEv()
    {
        return $this->idEv;
    }

    public function getDateEv()
    {
        return $this->dateEv;
    }
    public function getDateFinEv()
    {
        return $this->dateFinEv;
    }
    public function getIdL()
    {
        return $this->idL;
    }
    public function getNbpEv()
    {
        return $this->nbpEv;
    }
    public function getImageEv()
    {
        return $this->imageEv;
    }
    public function getNomEv()
    {
        return $this->nomEv;
    }

    public function getDiscripEv()
    {
        return $this->discripEv;
    }
    
    public function getPdiscripEv()
    {
        return $this->pdiscripEv;
    } 


    public function setIdEv($idEv)
    {
        $this->idEv = $idEv;
    }
    public function setDateEv($dateEv)
    {
        $this->dateEv = $dateEv;
    }
    public function setDateFinEv($dateFinEv)
    {
        $this->dateinEv = $dateFinEv;
    }
    public function setIdL($idL)
    {
        $this->idL = $idL;
    }
    public function setNbpEv($nbpEv)
    {
        $this->nbpEv = $nbpEv;
    } 
    public function setImageEv($imageEv)
    {
        $this->imageEv = $imageEv;
    } 
    public function setNomEv($nomEv)
    {
        $this->nomEv = $nomEv;
    }
    public function setDiscripEv($discripEv)
    {
        $this->discripEv = $discripEv;
    }
    public function setPdiscripEv($pdiscripEv)
    {
        $this->pdiscripEv = $pdiscripEv;
    }

    public function __construct($nomEv=false, $dateEv=false, $dateFinEv=false, $idL=false, $nbpEv=false, $pdiscripEv=false, $imageEv=false, $discripEv=false)
    {
        if($nomEv && $dateEv && $idL && $nbpEv && $pdiscripEv && $imageEv && $discripEv && $dateFinEv){
            $this->nomEv = $nomEv;
            $this->dateEv = $dateEv;
            $this->idL = $idL;
            $this->nbpEv = $nbpEv;
            $this->pdiscripEv = $pdiscripEv;
            $this->imageEv = $imageEv;
            $this->discripEv = $discripEv;
            $this->getDateFinEv = $dateFinEv;
        }else{
            $this->nomEv = "";
            $this->dateEv = "";
            $this->idL = "";
            $this->nbpEv = "";
            $this->pdiscripEv = "";
            $this->imageEv = "";
            $this->discripEv = "";
            $this->getDateFinEv = "";  
        }
    }
}
