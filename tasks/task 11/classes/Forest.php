<?php

class forest
{
    private $numberOfThrees;
    private $location;
    private $status;

    public function forest($numberOfThrees, $location, $status){
        $this->numberOfThrees = $numberOfThrees;
        $this->location = $location;
        $this->status = $status;
    }

/*    public function forest($location, $status){
        $this->location = $location;
        $this->status = $status;
    }*/

    public function getNumberOfThrees()
    {
        return $this->numberOfThrees;
    }

    public function setNumberOfThrees($numberOfThrees)
    {
        $this->numberOfThrees = $numberOfThrees;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    function addThree(){
        $this->numberOfThrees++;
        echo "Number of threes is changed!";
    }
}