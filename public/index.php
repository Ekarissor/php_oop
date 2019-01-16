<?php
require __DIR__.'/../vendor/autoload.php';

$h = new Hero('Alexandre', 100, 100, 3);
echo $h->getName().'<br>';
echo $h->getHP().'<br>';
echo $h->getMP().'<br>';
echo ($h->isDead() ? 'oui': 'non').'<br>';
echo $h->getLives().'<br>';

$v = new Vilain('Barbare', 10, 10);
echo $v->getName(). '<br>';
echo $v->getHP(). '<br>';
echo $v->getMP(). '<br>';
echo ($v->isDead() ? 'oui': 'non'). '<br>';

$f = new Fight();
$f->setFighters($h, $v);

while ( !$f->isOver()){
    $f->round();
}

$winner = $f->getWinner();
echo "The winner is {$winner->getName()}<br>";
echo $winner->getHP().'<br>';
echo $winner->getMP().'<br>';