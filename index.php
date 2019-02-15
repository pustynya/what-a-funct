<?php
require __DIR__ . '/vendor/autoload.php';

use Funct;

var_dump(Funct\Collection\every([true, 1, null, 'yes']));