<?php


class dog{
    private $name;
    private $age;
    private $color;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function move($string){
        echo "Dog go to ".$string;
    }

    public function voice(){
        $gav = "GAV";
        return $gav;
    }

}