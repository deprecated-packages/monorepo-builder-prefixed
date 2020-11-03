<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperee8f03533f8b\Symfony\Component\Mime\Tests\Part\Multipart;

use _PhpScoperee8f03533f8b\PHPUnit\Framework\TestCase;
use _PhpScoperee8f03533f8b\Symfony\Component\Mime\Message;
use _PhpScoperee8f03533f8b\Symfony\Component\Mime\Part\MessagePart;
use _PhpScoperee8f03533f8b\Symfony\Component\Mime\Part\Multipart\DigestPart;
class DigestPartTest extends \_PhpScoperee8f03533f8b\PHPUnit\Framework\TestCase
{
    public function testConstructor()
    {
        $r = new \_PhpScoperee8f03533f8b\Symfony\Component\Mime\Part\Multipart\DigestPart($a = new \_PhpScoperee8f03533f8b\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperee8f03533f8b\Symfony\Component\Mime\Message()), $b = new \_PhpScoperee8f03533f8b\Symfony\Component\Mime\Part\MessagePart(new \_PhpScoperee8f03533f8b\Symfony\Component\Mime\Message()));
        $this->assertEquals('multipart', $r->getMediaType());
        $this->assertEquals('digest', $r->getMediaSubtype());
        $this->assertEquals([$a, $b], $r->getParts());
    }
}
