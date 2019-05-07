<?php

require_once './classes/Character.php';

$debo = new Character(10,27,528,3);
$vinzeckel = new Character(13,18,250,0.6);

echo $debo->getHealth();

$debo->health = 32;

echo $debo->getHealth();
