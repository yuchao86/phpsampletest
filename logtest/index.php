<?php

require_once 'simpletest/autorun.php';
require_once 'Log.class.php';

class TestOfSite extends UnitTestCase{
  /*
  public function TestOfSite()
  {
    //$this->testNewLog();
    $this->UnitTestCase('Log Class');
  }
  */

  public function setUp()
  {
    // code...
  }

  public function tearDown()
  {
    // code...
  }

  public function testNewLog()
  {

    @unlink('./test.log');
    $log = new Log('./test.log');
    $log->message('Should write the test log file');
    $this->assertTrue(file_exists('./test.log'));
  }
}

$test = &new TestOfSite();
$test->run(new HtmlReporter());
//$test->run(new TextReporter());


?>
