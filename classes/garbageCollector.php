<?php

class garbageCollector
{
    private $square;
    private $payment;
    private $type;

    public function getSquare()
    {
        return $this->square;
    }

    public function setSquare($square)
    {
        $this->square = $square;
    }

    public function getPayment()
    {
        return $this->payment;
    }

    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    function burnGarbage($flag){
        if($flag == 1){
            echo "Garbage burn";
        } else {
            echo "Garbage did not burn";
        }
    }

    function paymentBurn($summ){
        if($summ){
            $this->burnGarbage(1);
        }
    }
}