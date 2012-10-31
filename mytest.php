<?php

require_once 'simpletest/autorun.php';

/**
 *
 **/
class MyTest extends UnitTestCase
{

  function __construct()
  {
    // code...
  }

  public function testPlus()
  {

    $this->assertEqual(1+1,2);
    $this->assertTrue(1 == '1');

  }
}

?>
