<?php

class cat
{
    private $name;
    private $breed;
    private $eyesColor;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->$name = $name;
    }

    public function getBreed(){
        return $this->breed;
    }

    public function setBreed($breed){
        $this->$breed = $breed;
    }

    public function getEyesColor(){
        return $this->eyesColor;
    }

    public function setEyesColor($eyesColor){
        $this->eyesColor = $eyesColor;
    }

    public function myau(){
        $myau = "myau";
        return $myau;
    }

    public function  palm($what){
        echo "Palming ".$what;
    }
}