<?php

require_once 'simpletest/autorun.php';
require_once 'MockLog.class.php';
require_once 'SessionPool.php';

class TestOfMock extends UnitTestCase{
  /*
  public function TestOfSite()
  {
    //$this->testNewLog();
    $this->UnitTestCase('Log Class');
  }
  */

  public function setUp()
  {
    @unlink('mocktest.log');
    // code...
  }

  public function tearDown()
  {
    @unlink('mocktest.log');
    // code...
  }

  public function testNewLog()
  {

    $log = new MockLog('./mocktest.log');
    $sessionpool = new SessionPool($log);
    $sessionpool -> logIn('fred');
    $message = file('./mocktest.log');
    $this->assertEqual($message[0],"User fred logged in.\n");
  }
}

$test = &new TestOfMock();
$test->run(new HtmlReporter());
//$test->run(new TextReporter());


?>
