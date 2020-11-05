<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperfd1a6a0ee9af\PHPUnit\Framework\TestCase;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Message;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperfd1a6a0ee9af\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Message()), $b = new \_PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperfd1a6a0ee9af\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
