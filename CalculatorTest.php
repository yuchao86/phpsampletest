<?php
require_once 'Calculator.php';
require_once 'PHPUnit.php';

/**
 * Test Case Calculator
 **/
class CalculatorTest extends PHPUnit_TestCase
{
  public $o;

  function __construct($name)
  {
    $this->PHPUnit_TestCase($name);
    // code...
  }

  public function setup()
  {
    // code...
    $this->o = new Calculator();
  }


  public function tearDown()
  {
    unset($this->o);
    // code...
  }

  public function tearadd()
  {
    $r = $this->o->add(2,3);
    $e = 5;

    $this->assertEquals($r,$e);
    // code...
  }

  public function testadd2()
  {
    $r = $this->o->add(100,101);
    $e = '201';
    $this->assertTrue($r == $e);
    //$this->assertEquals($r,$e);
  }
}


?>


