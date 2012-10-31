<?php

require_once 'simpletest/autorun.php';
require_once 'CalculatorTest.php';


$test = &new CalculatorTest();
$test->run(new HtmlReporter());
$test->run(new TextReporter());


?>
