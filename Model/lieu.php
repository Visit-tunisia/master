

<?php

class event
{
    private $idL;
    private $emplacementL;
    private $capaciteL;




    public function getIdL()
    {
        return $this->idL;
    }

    public function getEmplacementL()
    {
        return $this->emplacementL;
    }
    public function getCapaciteL()
    {
        return $this->capaciteL;
    }
    

    public function setIdL($idL)
    {
        $this->idL = $idL;
    }
    public function setEmplacementL($emplacementL)
    {
        $this->emplacementL = $emplacementL;
    }
    public function setCapaciteL($capaciteL)
    {
        $this->capaciteL = $capaciteL;
    }
    

    public function __construct($idL=false, $emplacementL=false, $capaciteL=false)
    {
        if($idL && $emplacementL && $capaciteL ){
            $this->emplacementL = $emplacementL;
            $this->capaciteL = $capaciteL;
        }else{
            $this->emplacementL = "";
            $this->capaciteL = "";

        }
    }
}
