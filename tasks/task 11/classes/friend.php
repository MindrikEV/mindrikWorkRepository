<?php

class friend
{
    private $name;
    private $age;
    private $status;

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

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    function callAFriend($number){
        echo "Call ".$number;
    }

    public function drink(){
        echo "Let's drink today.";
    }
}