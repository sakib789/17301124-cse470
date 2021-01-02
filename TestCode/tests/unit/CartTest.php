<?php
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase{
    
    public function testAddingProductPrice(){

        $a=array(2599,3999);

        $subtotal = array_sum($a);

        $this->assertEquals($subtotal, 6598); 
    }
}