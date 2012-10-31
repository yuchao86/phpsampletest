<?php
/*vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */
/*
 PHPUnit runs a TestSuite and returns a TestResult object.

 Here is an example:

 <code>
 <?php*/

require_once 'PHPUnit.php';
require_once 'CalculatorTest.php';

class MathTest extends PHPUnit_TestCase {
     var $fValue1;
     var $fValue2;

     function MathTest($name) {
       $this->PHPUnit_TestCase($name);
     }

     function setUp() {
       $this->fValue1 = 4;
       $this->fValue2 = 3;
     }

     function testAdd() {
       $this->assertTrue($this->fValue1 + $this->fValue2 == 7);
     }
 }
 $suite = new PHPUnit_TestSuite();
 $suite->addTest(new MathTest('testAdd'));
 $suite->addTest(new CalculatorTest('tearadd'));
 $suite->addTest(new CalculatorTest('testadd2'));

 $result = PHPUnit::run($suite);
 print $result->toHTML();

/*
 $unit = new PHPUnit_TestSuite('CalculatorTest');

 $result=PHPUnit::run($unit);

 print $result->toHTML();
 */
 ?>
