<?php
require 'cart1.php';
 
class cart1test extends PHPUnit\Framework\TestCase
{
    private $addcart;
 
    protected function setUp()
    {
        $this->addcart = new cart1();
    }
 
    protected function tearDown()
    {
        $this->addcart = NULL;
    }
 
    public function testAdd()
    {
        $result = $this->addcart->add(3999,2599);
        $this->assertEquals(6599, $result);
    }
 
}