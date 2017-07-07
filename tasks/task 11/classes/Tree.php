<?php
include "Leaf.php";
include "Root.php";
include "Leaf.php";

class tree
{
    /** @var  Root */
    private $root;
    /** @var  Branch */
    private $branches;
    private $height;
    private $sort;

    public function getRoot(): Root
    {
        return $this->root;
    }

    public function setRoot(Root $root)
    {
        $this->root = $root;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getSort()
    {
        return $this->sort;
    }

    public function setSort($sort)
    {
        $this->sort = $sort;
    }

    function addBranch($branch){
        $this->branches[] = $branch;
    }


}