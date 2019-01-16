<?php

class Hero extends Character
{
    private $lives;

    public function __construct($name, $hp, $mp, $lives = 3)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->mp = $mp;
        $this->lives = $lives;
    }

    public function getLives()
    {
        return $this->lives;
    }

    public function sayHello()
    {
        return "I'm a Hero and my name is {$this->name}, prepare to die !";
    }

    public function revive()
    {
        if ($this->isDead() && $this->lives) {
            $this->hp = 100;
            $this->lives = $this->lives - 1;
        }
    }
}