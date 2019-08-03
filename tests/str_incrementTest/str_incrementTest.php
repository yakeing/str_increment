<?php
namespace str_incrementTest;

use str_increment;
use str_increment/StrIncrement;
use PHPUnit\Framework\TestCase;

class str_incrementTest extends TestCase{

  public function testHex(){
    $str = '0fff'; // 16Hex Must be lowercase
    $ret = StrIncrement::NewStr($str, 16);
    $this->assertEquals('1000', $ret);
  }

   public function testDecimalist(){
    $str = '1999'; //string
    $ret = StrIncrement::NewStr($str, 10);
    $this->assertEquals('2000', $ret);
    $int = 100; //integer
    $ret = StrIncrement::NewStr($int, 10);
    $this->assertEquals('101', $ret);
  }

  public function testLetters(){
    $str = 'ABzZ';
    $ret = StrIncrement::NewStr($str, 'letters');
    $this->assertEquals('ABAa', $ret);
  }

  public function testLowercase(){
    $str = 'zxc';
    $ret = StrIncrement::NewStr($str, 'lowercase');
    $this->assertEquals('zxd', $ret);
  }

  public function testUppercase(){
    $str = 'ABZ';
    $ret = StrIncrement::NewStr($str, 'uppercase');
    $this->assertEquals('ACA', $ret);
  }
}
