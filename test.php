<?php

require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

class test extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.google.co.in/");
  }

  public function testMyTestCase()
  {
    $this->open("/webhp?hl=en");
    $this->click("gb_2");
    $this->waitForPageToLoad("30000");
    $this->click("gb_1");
    $this->waitForPageToLoad("30000");
    try {
        $this->assertEquals("Google", $this->getTitle());
    } catch (PHPUnit_Framework_AssertionFailedError $e) {
        array_push($this->verificationErrors, $e->toString());
    }
  }
}
?>