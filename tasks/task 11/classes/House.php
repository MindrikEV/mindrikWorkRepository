<?php

class House
{
    /** @var  bool */
    private $windows;
    /** @var  bool */
    private $doors;
    private $floors;

    public function isWindows(): bool
    {
        return $this->windows;
    }

    public function setWindows(bool $windows)
    {
        $this->windows = $windows;
    }

    public function isDoors(): bool
    {
        return $this->doors;
    }

    public function setDoors(bool $doors)
    {
        $this->doors = $doors;
    }

    public function getFloors()
    {
        return $this->floors;
    }

    public function setFloors($floors)
    {
        $this->floors = $floors;
    }

    function openWindows(){
        if($this->isWindows()){
            echo "The house has windows and now they opened!";
        } else {
            echo "The house does not have windows, sorry bro!";
        }
    }

    function openDoor(){
        if($this->isDoors()){
            echo "Doors is opened!";
        } else {
            echo "No doors in the house!";
        }
    }
}