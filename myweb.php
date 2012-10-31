<?php

require_once 'simpletest/autorun.php';
require_once 'simpletest/web_tester.php';

/**
 *
 **/
class MyWeb extends WebTestCase
{

  function __construct()
  {
    // code...
  }

  public function testSite()
  {
    $this->get("http://games.gree.net/");
    $this->assertTitle("App Portal - GREE");
    $this->clickLink('Help');
    $this->assertTitle('Support Home Page');
    $this->assertText('Payment');

  }
}

?>
