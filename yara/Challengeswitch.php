<?php
use App\Yara\Chlengeswitch\ChallengeSwitch;

$min = 50;
$max = 300;

ChallengeSwitch::EvenNumbersInRange($min, $max);
ChallengeSwitch::printEvenNumbers();