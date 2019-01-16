<?php
class Fight
{
    private $fighter1;
    private $fighter2;
    private $over = false;
    private $winner;

    public function setFighters($fighter1, $fighter2)
    {
        $this->fighter1 = $fighter1;
        $this->fighter2 = $fighter2;
        $this->over = false;
    }

    public function isOver()
    {
        return $this->over;
    }

    public function getWinner()
    {
        return $this->winner;
    }

    public function round()
    {
        $mp = $this->fighter1->attack(5);
        $this->fighter2->loseHP($mp);

        if ($this->fighter2->isDead()) {
            $this->over = true;
            $this->winner = $this->fighter1;
            return;
        }

        $mp = $this->fighter2->attack(5);
        $this->fighter1->loseHP($mp);

        if ($this->fighter1->isDead()) {
            $this->over = true;
            $this->winner = $this->fighter2;

            return;
        }
    }
}
