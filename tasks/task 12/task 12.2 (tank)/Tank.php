<?php

class Tank
{
    /** @var  Human */
    private $crew;
    /** @var  bool */
    private $gunStatus;

    function addHuman($human){
        $this->crew[] = $human;
    }

    function removeHuman($human){
        foreach ($this->crew as $arr){
            if($arr === $human){
                unset($arr);
            }
        }
    }

    function getCrewStatus(){
        echo "<pre>";
        print_r($this->crew->getStatus);
        echo "</pre>";
    }

    function setGunStatus($status){
        $this->gunStatus = $status;
    }

    function shot(){
        if(!$this->gunStatus) {
            $this->setGunStatus(1);
        }
        echo "PIF-PAFFFF!";
        $this->setGunStatus(0);
    }
}