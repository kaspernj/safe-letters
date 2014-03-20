<?php

require_once dirname(__FILE__) . "/../src/SafeLetters.php";

class SafeLettersTest extends PHPUnit_Framework_TestCase{
  function testOnlyLetters(){
    $name = "Kasper Johansen æøå";
    $this->assertEquals("KasperJohansen", SafeLetters::onlyLetters($name));
  }
}
