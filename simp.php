<?php
require_once 'simpletest/unit_tester.php';
require_once 'simpletest/web_tester.php';
require_once 'simpletest/reporter.php';
class PassportRegister extends WebTestCase {

       // 论坛登录测试
  function testPhpChina() {
     $this->get('http://weibo.com');
     //$this->setField('username', 'your_username');
     //$this->setField('password', '******');
     //元素的type属性为submit的input元素的name
     //$this->clickSubmitByName('loginsubmit');

      // 登录结果页包含文本
     //$this->assertText('your_username');
     $this->assertResponse(200);
    }
  function testIsProperFormSubmissionSuccessful() {

      $this->get('http://www.example.com/contact.php');
      $this->assertResponse(200);

      $this->setField("name", "Jason");
       $this->setField("email", "wj@example.com");
      $this->setField("message", "I look forward to hearing from you!");

       $this->clickSubmit("Contact us!");

       $this->assertResponse(200);
       $this->assertText("We will be in touch within 24 hours.");

  }
}
if (!defined('RUN_ALL')) {
     $test = new PassportRegister();
     $test->run(new HtmlReporter('utf-8'));
 }
                                                                            ?>
