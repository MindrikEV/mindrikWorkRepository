<?php
include "Leaf.php";

class Branch
{
    private $length;
    private $amountOfForks;
    /** @var  bool */
    private $buds;
    /** @var  Leaf */
    private $leafs;


    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getAmountOfForks()
    {
        return $this->amountOfForks;
    }

    public function setAmountOfForks($amountOfForks)
    {
        $this->amountOfForks = $amountOfForks;
    }

    public function isBuds(): bool
    {
        return $this->buds;
    }

    public function setBuds(bool $buds)
    {
        $this->buds = $buds;
    }

    function addLeaf($leaf){
        $this->leafs[] = $leaf;
    }

    function removeLeaf($leaf){
        foreach ($this->leafs as $arr){
            if($arr === $leaf){
                unset($arr);
            }
        }
    }

    function status(){
        echo "The branch has ".
            $this->amountOfForks.
            " forks, ".
            "<br>";
    }
}