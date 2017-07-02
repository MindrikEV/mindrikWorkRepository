<?php

class engine
{
    /** @var  boolean */
    private $state;
    /** @var  string */
    private $volume;

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