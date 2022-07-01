<?php

require 'User.php';
require 'Fight.php';

$firstUser = new User("SanGoku", "20", "150");
$secondeUser = new User("Narurot", "15", "120");

/*
 * firstUser attack secondUser
 */

$fighter = new Fight();
$secondeUser->setLife($secondeUser->getLife() - $firstUser->getAttack());
if($secondeUser->getLife() <= 0) {
    $fighter->end($firstUser->getName(), $secondeUser->getName());
} else {
    $fighter->info($firstUser->getName() . " a attaqué " . $secondeUser->getName() . " il lui reste donc " . $secondeUser->getLife() . "PV.");
}






