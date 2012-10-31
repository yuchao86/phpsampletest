<?php

require_once 'simpletest/autorun.php';
class TestOfSite extends UnitTestCase{
  public function setUp()
  {
    // code...
  }

  public function tearDown()
  {
    // code...
  }

  public function test_case1()
  {
    $this->assertTrue(true);
  }

}

$test = &new TestOfSite();
$test->run(new HtmlReporter());
$test->run(new TextReporter());


?>
