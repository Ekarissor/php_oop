<?php
require __DIR__.'/../vendor/autoload.php';

$h = new Hero('Moïse', 100, 100, 3);
echo $h->getName().'<br>';
echo $h->getHP().'<br>';
echo $h->getMP().'<br>';
echo ($h->isDead() ? 'oui': 'non').'<br>';
echo $h->getLives().'<br>';