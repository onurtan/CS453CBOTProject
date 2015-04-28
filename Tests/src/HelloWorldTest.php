<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }
    
		public function testHello()
    {
        $this->assertEquals('Hello Bar', 'Hello Bar');
    }

    public function testWhat()
    {
        $this->assertEquals(4, 2*3);
    }
}

