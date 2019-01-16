<?php
class Vilain extends Character
{
    public function __construct($name, $hp, $mp)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->mp = $mp;
    }
    
    public function sayHello()
    {
        return "Grrrrrrr !";
    }
}