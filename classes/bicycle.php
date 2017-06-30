<?php

class bicycle
{
    private $model;
    private $numbersOfWheels;
    private $gears;

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getNumbersOfWheels()
    {
        return $this->numbersOfWheels;
    }

    public function setNumbersOfWheels($numbersOfWheels)
    {
        $this->numbersOfWheels = $numbersOfWheels;
    }

    public function getGears()
    {
        return $this->gears;
    }

    public function setGears($gears)
    {
        $this->gears = $gears;
    }

    public function destroy($detal){
        echo "Destroed ".$detal;
    }

    public function repair(){
        $repair = "Klac-klac";
        echo $repair;
    }
}