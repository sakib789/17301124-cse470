<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('admin', ['name'=>"admin"]);

        $this->assertDatabaseHas('admin', ['pass'=>"1234"]);
    }
}
