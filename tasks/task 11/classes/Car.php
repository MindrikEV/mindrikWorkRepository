<?php

class car
{
    /** @var  string */
    private $model;
    /** @var  integer */
    private $speed;
    /** @var  Engine */
    private $engine;
    /** @var  boolean */
    private $engineStatus;
    private $maxSpeed = 10;

    /**
     * car constructor.
     * @param string $model
     * @param Engine $engine
     * @param int $maxSpeed
     */
    public function __construct($model, Engine $engine, $maxSpeed)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->maxSpeed = $maxSpeed;
        $this->speed=0;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model)
    {
        $this->model = $model;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }

    public function setEngine(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function isEngineStatus(): bool
    {
        return $this->engineStatus;
    }

    public function setEngineStatus(bool $engineStatus)
    {
        $this->engineStatus = $engineStatus;
    }

    function setMaxSpeed($speed){
        $this->maxSpeed = $speed;
    }

    function engineOn(){
        $this->engine->setState(1);
    }

    function engineOff(){
        $this->engine->setState(0);
    }

    function speedUp(){
        if(($this->speed += 5) <= $this->maxSpeed){
            $this->speed += 5;
        } else {
            echo "Max speed is ".$this->maxSpeed."!";
        }
    }

    function speedDown(){
        if(($this->speed -= 5) >= 0) {
            $this->speed -= 5;
        } else {
            echo "Min speed is 0!";
        }
    }

    function status(){
        echo $this->model."<br>".
            $this->speed."<br>".
            $this->engine."<br>".
            $this->engineStatus."<br>"
        ;
    }
}

class engine
{
    /** @var  boolean */
    private $state;
    /** @var  string */
    private $volume;

    public function __construct($volume)
    {
        $this->volume = $volume;
    }

    public function isState(): bool
    {
        return $this->state;
    }

    public function setState(bool $state)
    {
        $this->state = $state;
    }

    public function getVolume(): string
    {
        return $this->volume;
    }

    public function setVolume(string $volume)
    {
        $this->volume = $volume;
    }
}

//---------------------------------------------------------------------
$eng = new engine('2.2');
$cara = new car('opel vectra',$eng,220);
