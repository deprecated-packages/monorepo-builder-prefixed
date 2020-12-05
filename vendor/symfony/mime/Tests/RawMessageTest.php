<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper722a1d9fee2c\Symfony\Component\Mime\Tests;

use _PhpScoper722a1d9fee2c\PHPUnit\Framework\TestCase;
use _PhpScoper722a1d9fee2c\Symfony\Component\Mime\RawMessage;
class RawMessageTest extends \_PhpScoper722a1d9fee2c\PHPUnit\Framework\TestCase
{
    public function testToString()
    {
        $message = new \_PhpScoper722a1d9fee2c\Symfony\Component\Mime\RawMessage('string');
        $this->assertEquals('string', $message->toString());
        $this->assertEquals('string', \implode('', \iterator_to_array($message->toIterable())));
        // calling methods more than once work
        $this->assertEquals('string', $message->toString());
        $this->assertEquals('string', \implode('', \iterator_to_array($message->toIterable())));
        $message = new \_PhpScoper722a1d9fee2c\Symfony\Component\Mime\RawMessage(new \ArrayObject(['some', ' ', 'string']));
        $this->assertEquals('some string', $message->toString());
        $this->assertEquals('some string', \implode('', \iterator_to_array($message->toIterable())));
        // calling methods more than once work
        $this->assertEquals('some string', $message->toString());
        $this->assertEquals('some string', \implode('', \iterator_to_array($message->toIterable())));
    }
}
