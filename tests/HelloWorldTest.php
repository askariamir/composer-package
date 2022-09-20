<?php

use amir\App\HelloWorld;
use PHPUnit\Framework\TestCase;

final class HelloWorldTest extends TestCase
{
    public function testClass()
    {
        $obj = new HelloWorld();
        $this->assertSame('Helloo World!', $obj->sayHello());
    }}