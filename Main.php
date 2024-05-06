<?php

require_once 'Tomat.php';
require_once 'Gardener.php';
require_once 'TomatoBush.php';


$plant = new TomatoBush(3);
$gardener = new Gardener("Саша", $plant);

Gardener::knowledgeBase();

$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
$gardener->work($plant) . PHP_EOL;
$gardener->harvest() . PHP_EOL;
