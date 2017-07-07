<?php

class snake
{
    private $name;
    private $length;
    private $poison;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getPoison()
    {
        return $this->poison;
    }

    public function setPoison($poison)
    {
        $this->poison = $poison;
    }

    public function crawl($where){
        echo "Snake crawling ".$where;
    }

    public function bite($who){
        echo "Snake biting ".$who;
    }
}