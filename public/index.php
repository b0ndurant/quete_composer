<?php
require "../vendor/autoload.php";

use HelloWorld\SayHello;
use src\wcs\Hello;

$test = new Hello();
echo $test->talk();
echo SayHello::world();