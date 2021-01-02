<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class OrdersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('order_items', ['orderid'=>"1"]);
    }
}
