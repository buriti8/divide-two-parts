<?php

require_once('src/DivideTwoParts/Divide.php');

use DivideTwoParts\Divide;

$divide = new Divide(10);

echo $divide->validate();
