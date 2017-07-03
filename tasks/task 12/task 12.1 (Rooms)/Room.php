<?php

class Room
{
    /** @var  bool */
    private $windows;
    /** @var bool */
    private $doors;
    /** @var bool */
    private $light;
    /** @var Human */
    private $humans;

    public function setWindows(bool $windows)
    {
        $this->windows = $windows;
    }

    public function setDoors(bool $doors)
    {
        $this->doors = $doors;
    }

    public function setLight(bool $light)
    {
        $this->light = $light;
    }

    function getLightStatus(){
        if($this->light) {
            echo "Light is ON!";
        } else {
            echo "Light is OFF!";
        }
    }

    function addHuman($human){
        $this->humans[] = $human;
    }

    function removeHuman($human){
        foreach ($this->humans as $arr){
            if($arr === $human){
                unset($arr);
            }
        }
    }

    function getStatus(){
        echo "In the room ".count($this->humans)."<br>";
        $this->getLightStatus();
    }


}