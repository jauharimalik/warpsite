<?php

require_once __DIR__ . '/../vendor/autoload.php';
 
use jauharimalik\ws\Test;

$test= new Test();
echo $test->greet();