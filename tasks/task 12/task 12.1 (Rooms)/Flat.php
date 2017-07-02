<?php

class Flat
{
    /** @var  Room */
    private $rooms;

    function addRoom($room){
        $this->rooms[] = $room;
    }

    function removeRoom($room){
        foreach ($this->rooms as $arr){
            if($arr === $room){
                unset($arr);
            }
        }
    }

    function status(){
        echo "Amount of the rooms - ".count($this->rooms);
        foreach ($this->rooms as $arr){
            //echo "Room №";
            $arr->getStatus;
            echo "<br>";
        }
    }


}