<?php

class moto
{
    private $color;
    private $model;
    private $capacity;

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    public function wroom(){
        echo "Wroom-wroom MF!!!";
    }

    public function repair($part){
        echo "Repairing the ".$part;
    }
}