<?php

namespace _PhpScoperc9dee8f3b3e7;

class RandomBytesTest extends \_PhpScoperc9dee8f3b3e7\PHPUnit_Framework_TestCase
{
    public function testFuncExists()
    {
        $this->assertTrue(\function_exists('random_bytes'));
    }
    public function testOutput()
    {
        $bytes = array(\random_bytes(12), \random_bytes(64), \random_bytes(64));
        $this->assertTrue(\strlen(\bin2hex($bytes[0])) === 24);
        // This should never generate identical byte strings
        $this->assertFalse($bytes[1] === $bytes[2]);
    }
}
\class_alias('_PhpScoperc9dee8f3b3e7\\RandomBytesTest', 'RandomBytesTest', \false);
