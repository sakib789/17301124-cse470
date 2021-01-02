<?php

use PHPUnit\Framework\TestCase;


class ProductTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('product' , ['product_type'=>"Digital Art"]);

        $this->assertDatabaseHas('product' , ['product_name'=>"Beautifu Art"]);
    }
}
