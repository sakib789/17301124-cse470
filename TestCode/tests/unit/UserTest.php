<?php

use PHPUnit\Framework\TestCase;


class UserTest extends TestCase
{
    
    public function testThatWeCanGetTheFirstName(){
        $user = new \App\Models\User;
        
        $user->setFirstName('Nazmur');
        
        $this->assertEquals($user->getFirstName(),'Nazmur');
    }
    
    public function testTrueAssertsToTrue()
    {
        $this->assertTrue(true);
    }
    
    public function testThatWeCanGetTheLastName(){
        $user = new \App\Models\User;
        
        $user->setLastName('Sakib');
        
        $this->assertEquals($user->getLastName(),'akib');
    }
}