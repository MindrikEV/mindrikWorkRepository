<?php

class Human
{
    private $name;
    private $sex;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    function getStatus(){
        echo "$this->getName()";
        echo "$this->getSex()";
    }

}