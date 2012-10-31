<?php
error_reporting(E_ALL);

require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';
require_once 'simpletest/unit_tester.php';
require_once 'simpletest/mock_objects.php';

require_once 'RequestHandler.class.php';

Mock::generate('RequestHandler');

/**
 * Webtest
 **/
class MockTest extends UnitTestCase
{

  function __construct()
  {
    // code...
  }

  public function testHomePage()
  {
    $connection = &new MockRequestHandler();
    $connection->setReturnValue('getGateUrl','http://payment.cyu01.gree.dev.net');

  }
}
?>
