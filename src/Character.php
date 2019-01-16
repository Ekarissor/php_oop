<?php
class Character
{
    protected $name;
    protected $hp;
    protected $mp;

    public function getName()
    {
        return $this->name;
    }

    public function setName()
    {
        $this->name = $name;
        return $this;
    }

    public function getHP()
    {
        return $this->hp;
    }

    public function getMp()
    {
        return $this->mp;
    }

    public function attack($mp)
    {
        if ($this->mp < $mp) {
            return 0;
        }

        $this->mp = $this->mp - $mp;

        return $mp;
    }

    public function loseHP($hp)
    {
        if ($this->isDead()) {
            return;
        }

        $this->hp = $this->hp - $hp;
    }

    public function isDead()
    {
        if ($this->hp <= 0) {
            return true;
        }

        return false;
    }
}