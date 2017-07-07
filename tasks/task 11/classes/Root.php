<?php

class root
{
    private $length;
    private $amountOfEnds;
    private $color;

    public function __construct($length, $amountOfEnds, $color)
    {
        $this->length = $length;
        $this->amountOfEnds = $amountOfEnds;
        $this->color = $color;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getAmountOfEnds()
    {
        return $this->amountOfEnds;
    }

    public function setAmountOfEnds($amountOfEnds)
    {
        $this->amountOfEnds = $amountOfEnds;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    function grow(){
        echo "The root is bigger";
    }

    function plexus(){
        echo $this->amountOfEnds." roots were plexused!";
    }
}