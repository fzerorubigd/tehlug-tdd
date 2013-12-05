<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{

    public function testMin()
    {
        $obj = new \Cybits\Example();
        $this->assertEquals(10, $obj->min(10, 100));
    }

    public function testMax()
    {
        $obj = new \Cybits\Example();
        $this->assertEquals(100, $obj->max(10, 100));
    }
}