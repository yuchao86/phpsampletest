<?php
error_reporting(E_ALL);

require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

/**
 * Webtest
 **/
class MySiteTest extends WebTestCase
{

  function __construct()
  {
    // code...
  }

  public function testHomePage()
  {
    $this->get("http://www.sina.com.cn/");
    $this->assertTitle("SINA");
    $this->clickLink("http://weibo.com/");
    $this->assertPattern();
  }
}
?>
