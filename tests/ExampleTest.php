<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{

    public function testMin()
    {
        $obj = new \Cybits\Example();
        $this->assertEquals(10, $obj->min(10, 100));
        $this->assertEquals(5, $obj->min(10, 5));
        $this->assertEquals(1, $obj->min(1, 100));
    }

    public function testMax()
    {
        $obj = new \Cybits\Example();
        $this->assertEquals(100, $obj->max(10, 100));
        $this->assertEquals(70, $obj->max(11, 70));
        $this->assertEquals(20, $obj->max(10, 20));
    }
}