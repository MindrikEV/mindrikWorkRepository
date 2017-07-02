<?php

class table
{
    private $model;
    private $description;
    private $price;

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function sale(){
        echo "The table sale, price is ".$this->price."$";
    }

    public function throw(){
        echo "Throw table into garbage";
    }
}