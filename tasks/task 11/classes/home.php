<?php

class home
{
    private $adress;
    private $numberOfFlor;
    private $numberOfWindows;

    public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    public function getNumberOfFlor()
    {
        return $this->numberOfFlor;
    }

    public function setNumberOfFlor($numberOfFlor)
    {
        $this->numberOfFlor = $numberOfFlor;
    }

    public function getNumberOfWindows()
    {
        return $this->numberOfWindows;
    }

    public function setNumberOfWindows($numberOfWindows)
    {
        $this->numberOfWindows = $numberOfWindows;
    }

    function openTheDoor($status){
        if($status!= 0){
            echo "The door is opened";
        } else {
            echo "The door is closed";
        }
    }

    function switchOnLight(){
        echo "The light was switched on!";
    }
}